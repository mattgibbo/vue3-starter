<template>
  <div class="dis--grid pad--l">
    <Sidebar />
    <div class="col--span10">
      <div class="card pad">
        <h1>{{ title }}</h1>

        <div class="mar-b">
          <button type="button" class="btn btn--1" @click="updatePageTitle()">Test API by updating page title with testFunction</button>
          <button type="button" class="btn btn--2" @click="updatePageTitleTwo()">Test API by updating page title with default function</button>
        </div>
      </div>

      <div class="card mar-t--s pad">
        <h2 class="mar--0">The Author</h2>

        <p>
          <strong>Github Profile:</strong> 
          <a href="https://github.com/mattgibbo" target="_blank">
            https://github.com/mattgibbo
          </a>
        </p>

        <p>
          <strong>Github Project:</strong> 
          <a href="https://github.com/mattgibbo/vue3-starter" target="_blank">
            https://github.com/mattgibbo/vue3-starter
          </a>
        </p>

        <p>
          <strong>Website:</strong> 
          <a href="https://www.mattgibbins.com" target="_blank">
            www.mattgibbins.com
          </a>
        </p>

        <p>
          <strong>Twitter:</strong> 
          <a href="https://www.twitter.com/_mattgibbo" target="_blank">
            www.twitter.com/_mattgibbo
          </a>
        </p>
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
      title: "Vue3 Starter Project"
    };
  },
  methods: {
    updatePageTitle() {
      api
        .post("/api/test.php", {
          functionName: "testFunction"
        })
        .then(response => (this.title = response.data))
        .catch(function(error) {
          console.log("%cERROR: " + error, "color:#f44");
        });
    },
    updatePageTitleTwo() {
      api
        .get("/api/test.php")
        .then(response => (this.title = response.data))
        .catch(function(error) {
          console.log("%cERROR: " + error, "color:#f44");
        });
    }
  }
};
</script>
