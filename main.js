var App = new Vue({
    el: "#app",
    data: {
        dischiArray: [],
        filterGenre: [],
        selectValue: null,
        loading: true,
        inputOption: "",
    },
    created: function () {
      this.getDischi();
      this.getGenre();
    },
    methods:{
        filtraDischi() {
          this.inputOption = this.selectValue;
        },
        async getDischi() {
          let response = await this.makeAxiosCall("urlDisc.php");
          this.dischiArray = response.data;
        },
        async getGenre() {
          let response = await this.makeAxiosCall("../genreList.php");
          this.filterGenre = response.data;
        },
        makeAxiosCall(url) {
          return axios.get(url);
        },
    },
    computed: {
        dischiFiltrati() {
          return this.dischiArray.filter((disc) => {
              return disc.genre.includes(this.inputOption);
          });
        },
      },
  });