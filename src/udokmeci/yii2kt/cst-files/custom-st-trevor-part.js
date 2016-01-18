jQuery.fn.customSirTrevorPart = function(options) {
    var defaults = {
        imgBtnLabel: '<i class="fa fa-picture-o"></i>',
        maxWidth: 1200,
    };
    var settings = $.extend(true, {}, defaults, options);
    var map = {};
    function pasteHtmlAtCaret(html) {
        var sel, range;
        if (window.getSelection) {
            // IE9 and non-IE
            sel = window.getSelection();
            if (sel.getRangeAt && sel.rangeCount) {
                range = sel.getRangeAt(0);
                range.deleteContents();

                // Range.createContextualFragment() would be useful here but is
                // non-standard and not supported in all browsers (IE9, for one)
                var el = document.createElement("div");
                el.innerHTML = html;
                var frag = document.createDocumentFragment(), node, lastNode;
                while ((node = el.firstChild)) {
                    lastNode = frag.appendChild(node);
                }
                range.insertNode(frag);

                // Preserve the selection
                if (lastNode) {
                    range = range.cloneRange();
                    range.setStartAfter(lastNode);
                    range.collapse(true);
                    sel.removeAllRanges();
                    sel.addRange(range);
                }
            }
        } else if (document.selection && document.selection.type != "Control") {
            // IE < 9
            document.selection.createRange().pasteHTML(html);
        }
    }
    function getInstance() {
        return SirTrevor.getInstance(settings.block.instanceID)
    }
    ;
    function initBlock(item) {
        item.addClass('cst-placeholer');
        item.notDefault = function() {
            item.removeClass('cst-placeholer');
            return item;
        }



        item.wrapper = $('<div class="cst-wrapper"/>').appendTo(item.parent());
        item.options = $('<div class="cst-options"/>').appendTo(item.wrapper);
        item.options.btnGroup = $('<div class="btn-group" role="group" aria-label="..."/>').appendTo(item.options);

        /* item.options.btnGroup.append($(
             ['<button type="button" class="btn btn-default">1</button>',
             '<button type="button" class="btn btn-default">2</button>',
             '<div class="btn-group" role="group">',
                 '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">       Dropdown       <span class="caret"></span></button>',
                 '<ul class="dropdown-menu">',
                     '<li><a href="#">Dropdown link</a></li>',
                     '<li><a href="#">Dropdown link</a></li>',
                 '</ul>',
             '</div>'].join('\n')
             ));*/

        item.appendTo(item.wrapper);

        //console.log(item.data().role);
        switch (item.data().role) {
        case 'editable-subblock':
            return initSubBlock(item);
        case 'editable-image':
            return initImageBlock(item);
        }
    }
    ;

    function initSubBlock(item) {

        item.attr('contenteditable', 'true');
        item.getValue = function() {
            return item.html();
        };
        item.setValue = function(value) {
            return item.html(value).notDefault();
        };
        item.on('click', function() {
            if (item.hasClass('cst-placeholer'))
                document.execCommand('selectAll', false, null);
        });
        item.changeFunction = function(e) {
            console.log('input', e);
            item.notDefault();
            //console.log(item.data().key,settings.block);
            settings.block.change(item.data().key, item.getValue());
        };
        item.isHeading = function() {
            return item.is('h1,h2,h3,h4,h5,h6')
        };
        if (!item.isHeading()) {
            item.boldBtn = item.changeImageBtn = $('<span class="btn btn-default" />')
                .html('<i class="fa fa-bold"></i>')
                .appendTo(item.options.btnGroup)
                .click(function() {
                    document.execCommand('bold');
                });
            item.italicBtn = item.changeImageBtn = $('<span class="btn btn-default" />')
                .html('<i class="fa fa-italic"></i>')
                .appendTo(item.options.btnGroup)
                .click(function() {
                    document.execCommand('italic');
                });
        }
        item[0].addEventListener("paste", function(e) {
            e.preventDefault();
            var clipboardData = (e.originalEvent || e).clipboardData;
            var text = clipboardData.getData('text/html') || clipboardData.getData('Text') || false;
            if (!text)
                return;
            var $result = $('<div></div>').append($(text));

            $result.html($result.html());

            // replace all styles except bold and italic
            $.each($result.find("*"), function(idx, val) {

                var $item = $(val);
                if ($item.length > 0) {
                    var saveStyle = {
                        'font-weight': $item.css('font-weight'),
                        'font-style': $item.css('font-style')
                    };
                    $item.removeAttr('style')
                        .removeClass()
                        .css(saveStyle);
                    if (item.isHeading() || !$(this).is('section,div,p,ul,ol,li,blockqoute,b,i,strong,a,hr,img,iframe')) {
                        $item.replaceWith(function() {
                            return $(this).text();
                        });
                    }
                    if ($(this).is('iframe')) {
                        var wrappervideo = $('<div class="embed-responsive embed-responsive-16by9" />');
                        wrappervideo.appendTo($item.addClass('embed-responsive-item').parent()).append($item).append('<br/>');
                    }
                }
            });
            // remove unnecesary tags (if paste from word)
            $result.children('style').remove();
            $result.children('meta').remove();
            $result.children('link').remove();
            pasteHtmlAtCaret($result.html());
            item.changeFunction(e);
        }, false);
        item[0].addEventListener("input", item.changeFunction, false);


        return item;
    }
    ;

    function initImageBlock(item) {

        item.getValue = function() {
            return {
                url: item.attr('src'),
                id: item.data().id,
                width: item.data().width,
                height: item.data().height,
            };
        };

        item.setValue = function(value) {
            return item
                .attr('src', value.url)
                .data('width', value.width)
                .data('height', value.height)
                .data('id', value.id)
                .notDefault();
        };

        item.editing = function() {
            item.options.btnGroup.empty();
            item.changeImageBtn = $('<span class="btn btn-primary btn-file" />')
                .html(settings.imgBtnLabel)
                .appendTo(item.options.btnGroup);
            var input = item.input = $('<input type="file"/>').appendTo(item.changeImageBtn);
            input.on('change', function(e) {
                var input = this;
                if (input.files && input.files[0]) {
                    var latestValue = item.getValue();
                    var reader = new FileReader();
                    var target_type = input.files[0].type;
                    var filename = input.files[0].name;
                    var cropper;
                    reader.onload = function(e) {
                        item.setValue($.extend(item.getValue(), {
                            url: e.target.result
                        }));
                        console.log(item.getValue());
                        item.changeImageBtn.hide();
                        item.imageOkBtn = $('<button type="button" class="btn btn-primary"/>')
                            .html('<i class="fa fa-crop"></i>')
                            .appendTo(item.options.btnGroup);
                        item.imageNoCropBtn = $('<button type="button" class="btn btn-success"/>')
                            .html('<i class="fa fa-check"></i>')
                            .appendTo(item.options.btnGroup);
                        item.imageCancelBtn = $('<button type="button" class="btn btn-danger"/>')
                            .html('<i class="fa fa-trash"></i>')
                            .appendTo(item.options.btnGroup);
                        cropper = item.cropper({
                            dragMode: 'move',
                            viewMode: 1,
                            autoCrop: true,
                        });
                        var uploadFunction = function(e, cancel) {
                            cancel = cancel || false;
                            if (cancel) {
                                var imageData = cropper.cropper('getImageData');
                                cropper.cropper('setCropBoxData', {
                                    top: 0,
                                    left: 0,
                                    width: imageData.width,
                                    height: imageData.height,
                                });
                            }
                            var canvas = cropper.cropper('getCroppedCanvas');
                            var allowedMaxWidth = item.data().maxWidth || settings.maxWidth;
                            if (canvas.width > allowedMaxWidth) {
                                var ratio = allowedMaxWidth / canvas.width;
                                var canvas = cropper.cropper('getCroppedCanvas', {
                                    width: canvas.width * ratio,
                                    height: canvas.height * ratio,
                                });
                            }
                            var canvasData = canvas.toDataURL(target_type);
                            item.setValue($.extend(item.getValue(), {
                                width:canvas.width,
                                height:canvas.height,
                                url: canvasData
                            }));
                            var nanobar = new Nanobar({
                                target: item.wrapper[0]
                            });
                            nanobar.go(10);
                            var formData = new FormData();
                            var blobBin = atob(canvasData.split(',')[1]);
                            var array = [];
                            for (var i = 0; i < blobBin.length; i++) {
                                array.push(blobBin.charCodeAt(i));
                            }
                            var file = new Blob([new Uint8Array(array)], {
                                type: target_type
                            });
                            formData.append('attachment[file]', file, filename);
                            if (item.getValue().id) {
                                formData.append('attachment_file_override_id', item.getValue().id);
                            }
                            $.ajax({
                                xhr: function() {
                                    var xhr = new window.XMLHttpRequest();
                                    xhr.upload.addEventListener("progress", function(evt) {
                                        if (evt.lengthComputable) {
                                            var percentComplete = evt.loaded / evt.total;
                                            nanobar.go(percentComplete * 80+10);
                                        }
                                    }, false);
                                    xhr.addEventListener("progress", function(evt) {
                                        if (evt.lengthComputable) {
                                            var percentComplete = evt.loaded / evt.total;
                                            nanobar.go(percentComplete * 10 + 90);
                                        }
                                    }, false);
                                    return xhr;
                                },
                                type: 'POST',
                                url: getInstance().options.uploadUrl,
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    item.setValue({
                                        url: data.file.url,
                                        id: data.file.media_id
                                    })
                                    settings.block.change(item.data().key, item.getValue());
                                    console.log(item);
                                },
                                error: function() {
                                    console.log('Upload error');
                                },
                            }).always(function(){
                                $(nanobar.el).remove();
                            });
                            cropper.cropper('destroy');
                            item.editing();
                        }
                        item.imageOkBtn.click(uploadFunction);
                        item.imageNoCropBtn.click(function(e) {
                            uploadFunction(e, true);
                        });
                        item.imageCancelBtn.click(function(e) {
                            item.setValue(latestValue);
                            cropper.cropper('destroy');
                            item.editing();
                        });
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            });
        }
        item.editing();
        return item;
    };

    this.each(function() {
        var $this = $(this);
        map[$this.data().key] = initBlock($this);

    });

    this.setValue = function(key, value) {
        map[key].setValue(value).notDefault();
    }

    this.getValue = function(key) {
        //console.log(map[key]);
        map[key].getValue();
    }

    return this;
};