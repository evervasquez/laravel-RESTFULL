Bibliboteca.Views.FacultadsView = Backbone.View.extend({
    //elemento jquery
    el: $("#facultades"),

    initialize: function () {
        this.listenTo(this.collection, "add", this.render(), this);
    },

    render: function () {
        console.log('pase por render');
        this.collection.each(function (facultad) {
            //cargamos la vista individual
            var facultadView = new Bibliboteca.Views.Facultad({model:facultad});
            //this.$el.appendTo(facultadView.render().el);
            $(document.body).append(facultadView.render().el);
        },this);
    }
});