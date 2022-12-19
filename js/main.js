const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
    };
  },
  created() {
    axios.get("http://localhost/php-dischi-json/api.php").then((res) => {
      this.albums = res.data;
    });
  },
}).mount("#app");
