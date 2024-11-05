<template>
  <q-layout view="hHh lpR fFf">

    <q-header flat>
      <q-toolbar class="header-menu">
        v_1.1.0
        <q-btn
          v-for="menu in menuItems"
          :key="menu.label"
          flat
          :label="menu.label"
          :to="menu.to"
        />
      </q-toolbar>
    </q-header>

    <q-page-container>
      <router-view />
    </q-page-container>

    <div class="footer">
      <q-toolbar class="footer-menu">
        <q-btn
          v-for="menu in menuItems"
          :key="menu.label"
          flat
          :label="menu.label"
          :to="menu.to"
        />
      </q-toolbar>
    <p class="cr">Copyright © 2024 Toi Tamura All Rights Reserved.</p>
    </div>

  </q-layout>
</template>

<script>
export default {
  data() {
    return {
      menuItems: [
        { label: 'About', to: '/#about' },
        { label: 'Works', to: '/#works' },
        { label: 'Contact', to: '/contact-form' },
        { label: 'Skill', to: '/#skills' }
      ]
    };
  }
};
</script>

<style scoped>
.header-menu,
.footer-menu {
  justify-content: center;
}
</style>
