
var SirTrevorCustomBlockAttributes = {
    customSirTrevorPart: null,
    icon_name: function() {
        if (!this.image) {
            var img_id = this.type + '-thumb';
            var container = $('<div class="container">').appendTo(document.body);
            var rows = $('<div class="row">').appendTo(container);
            var col = $('<div class="col-sm-6">').appendTo(rows).append(this.editorHTML());
            setTimeout(function() {
                html2canvas(col[0], {
                    useCORS:true,
                    useTainted:true,

                    onrendered: function(canvas) {
                        setTimeout(function() {
                            $('#' + img_id).attr('src', canvas.toDataURL());
                            setTimeout(function() {
                                container.remove();
                            }, 2000);
                        }, 2000)
                    }
                });
            }, 2000);

        }
        return '<img  id="' + img_id + '" src="' + this.image + '" alt="' + this.title + '"/>';
    },

    editorHTML: function() {
        var html = Mustache.render(this.template, this.templateObject);

        //console.log(html);
        return html;
    },
    getAllParts: function() {
        return this.$('[data-st-part="data"]');
    },
    getCustomSirTrevorPart: function() {
        if (this.customSirTrevorPart)
            return this.customSirTrevorPart;
        return this.customSirTrevorPart = this.getAllParts().customSirTrevorPart({
            block: this
        });
    },
    onBlockRender: function() {
        //console.log('onBlockRender');
        var that = this;
        that.getCustomSirTrevorPart();
        this.loadData(this.getBlockData);
    },
    change: function(key, value) {
        var data = this.getBlockData();
        //console.log(data,key,value);
        data[key] = value;
        this.setData(data);
    },
    loadData: function(data) {
        //console.log('loadData',data);
        var that = this;
        _.each(data, function(e, i) {
            //console.log(i,e);
            that.getCustomSirTrevorPart().setValue(i, e);
        });


    }
};

