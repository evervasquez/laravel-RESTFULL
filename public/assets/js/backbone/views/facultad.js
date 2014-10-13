Bibliboteca.Views.Facultad = Backbone.View.extend({
    //tipo de contenedor
    //tagName: 'article',
    //nombre de la clase
    className: 'facultad',
    //template
    template: _.template($("#facultad-template").html()),

    //si hay eventos
    event: {
        'click': 'navigate'
    },

    initialize: function () {
        //this.render();
        this.listenTo(this.model, "change", this.render(), this);
    },

    render: function () {
        //recuperamos los datos del model
        var facultad = this.model.toJSON();

        //recuperamos el html con los datos
        var html = this.template(facultad);

        //enviamos el html
        this.$el.html(html);
        return this;
    },

    navigate: function () {
        Bibliboteca.app.navigate('facultad/' + this.model.get('nombre'), {trigger: true})
    }
})