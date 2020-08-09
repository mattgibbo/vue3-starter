<template>
  <div class="dis--grid pad--l">
    <Sidebar />
    <div class="card col--span10 pad">
      <h1>{{ title }}</h1>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste alias laudantium et dolorum ipsum, ad reprehenderit saepe? Molestias quibusdam dolore, quisquam nesciunt culpa illo iusto quas similique temporibus velit distinctio!
      </p>
    </div>
  </div>
</template>

<script>
import Sidebar from "@/components/Sidebar.vue";

export default {
  name: "About",
  components: {
    Sidebar
  },
  data() {
    return {
      title: "About Page"
    };
  }
}
</script>