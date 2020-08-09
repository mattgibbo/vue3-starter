<template>
  <div class="card col--span2 pad">
    <img src="@/assets/logo.png" alt="Vue" class="pad" />

    <div v-for="linkList in navList" :key="linkList.id">
      <h4>{{ linkList.title }}</h4>
      <ul>
        <li v-for="link in linkList.links" :key="link.id">
          <a :href="link.url" @click.prevent="changeUrl($event)">
            {{ link.title }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "sidebar",
  data() {
    return {
      navList: [
        {
          id: "links",
          title: "Links",
          links: [
            {
              id: "home",
              title: "Home",
              url: "/"
            },
            {
              id: "about",
              title: "About",
              url: "/about"
            }
          ]
        },
        {
          id: "search-engines",
          title: "Search Engines",
          links: [
            {
              id: "bing",
              title: "Bing",
              url: "https://www.bing.com"
            },
            {
              id: "ddg",
              title: "Duck Duck Go",
              url: "https://www.duckduckgo.com"
            },
            {
              id: "google",
              title: "Google",
              url: "https://www.google.com"
            }
          ]
        }
      ]
    };
  },
  methods: {
    changeUrl(e) {
      let url = e.currentTarget.getAttribute("href");

      if (url.includes("https://")) {
        window.open(url, "_blank");
      } else {
        this.$router.push(url);
      }
    }
  }
};
</script>

/* Scoped means the style will only apply to this component */
<style lang="scss" scoped>
h4 {
  color: #666;
  font-size: 1.25em;
  font-weight: 400;
  margin: 0;
}

ul {
  list-style: none;
  padding: 0;
}

li {
  a {
    display: block;
    padding: .5em 1em;
  }
}
</style>
