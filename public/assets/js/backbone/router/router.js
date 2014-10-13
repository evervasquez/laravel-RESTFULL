Bibliboteca.Router = Backbone.Router.extend({
    routes: {
        //'ruta': 'function'
        '': 'index',
        'facultades': 'facultades',
        'materias': 'materias'
    },
    initialize: function () {
        //this.Cfacultads = new Bibliboteca.Collections.Facultads();
        this.CMaterias = new Bibliboteca.Collections.Materias();
        //new Bibliboteca.Views.FacultadsView({ collection: this.Cfacultads });
        //enviamos la collection recuperada a la view
        //this.VMaterias = new Bibliboteca.Views.
        Backbone.history.start();
    },

    index: function () {
        //creamos la collection
        this.Cfacultads = new Bibliboteca.Collections.Facultads(
            [
                {
                    name: 'facultad de ingenieria de sistemas',
                    id: '1'
                },
                {
                    name: 'facultad de agronomia',
                    id: '2'
                }
            ]
        )

        //enviamos a la vista
        new Bibliboteca.Views.FacultadsView({ collection: this.Cfacultads });
    },

    facultades: function () {
        //recuperamos el json
         $.getJSON('facultades').then(function (data) {
            //creamos la collection
            this.xxx = new Bibliboteca.Collections.Facultads();
            for(var facultad in data)
            {
                //agregamos al collection los modelos
                this.xxx.add(new Bibliboteca.Models.Facultad({
                    name: data[facultad].Nombres,
                    id: data[facultad].FacultadID
                }));
            }

            //enviamos a la vista
            new Bibliboteca.Views.FacultadsView({ collection: this.xxx });
        });
    },

    materias: function () {
        console.log('Estoy en Materias');
    }
});