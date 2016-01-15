var SirTrevorCustomBlockAttributes = {
    customSirTrevorPart: null,
    icon_name: function() {
        return '<img src="' + this.image + '" alt="' + this.title + '">';
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

