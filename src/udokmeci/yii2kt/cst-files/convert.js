var SirTrevorCustomBlockAttributes = {
    customSirTrevorPart: null,
    icon_name: function() {
        return '<img src="' + this.image + '" alt="' + this.title + '"/>';
    },
    editorHTML: function() {
        var html = Mustache.render(this.template, this.templateObject);
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
        var that = this;
        that.getCustomSirTrevorPart();
        this.loadData(this.getBlockData);
    },
    change: function(key, value) {
        var data = this.getBlockData();
        data[key] = value;
        this.setData(data);
    },
    loadData: function(data) {
        var that = this;
        _.each(data, function(e, i) {
            that.getCustomSirTrevorPart().setValue(i, e);
        });
    }
};

