<template>
  <div class="col--span2">
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

      if (url.includes('https://')) {
        window.open(url, '_blank');
      } else {
        this.$router.push(url);
      }
    }
  }
};
</script>
