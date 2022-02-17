var App = new Vue({
    el: "#app",
    data: {
        apiUrl : "urlDisc.php",
        dischiArray: [],
        loading: true,
        inputOption: "",
        inputType: "",
    },
    created: function () {
      this.getDischi();
    },
    methods:{
        getDischi() {
            axios
                .get(this.apiUrl)
                .then((dischi) => {
                this.dischiArray = dischi.data;
                setTimeout(() => {
                    this.loading = false;
                }, 1200);
                })
                .catch(function (error) {
                console.log(error);
                });
            },
    },
    computed: {
        dischiFiltrati() {
          return this.dischiArray.filter((disc) => {
            if(this.inputType == 'genere')
              return disc.genre.includes(this.inputOption);
            else
              return disc.author.includes(this.inputOption);
          });
        },
      },
  });