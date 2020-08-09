<template>
  <div class="pad--l">
    <AddFilmForm />
    <div class="dis--grid card">
      <Sidebar />
      <div class="col--span10">
        <h1>{{ title }}</h1>
        <a href="https://github.com/mattgibbo/vue3-starter">github.com/mattgibbo/vue3-starter</a>
      </div>
    </div>
  </div>
</template>

<script>
import api from "@/common/api";
// @ is an alias to /src
import Sidebar from "@/components/Sidebar.vue";

export default {
  name: "Home",
  components: {
    Sidebar
  },
  data() {
    return {
      title:  "Vue3 Starter Project"
    };
  },
  methods: {
    updatePageTitle() {
      api.post("/api/test.php", {
        functionName: "testFunction",
      })
      .then(response => (this.tite = response.data))
      .catch(function(error) {
        console.log("%cERROR: " + error, "color:#f44");
      });
    }
  },
  mounted() {
    this.updatePageTitle();
  }
};
</script>
