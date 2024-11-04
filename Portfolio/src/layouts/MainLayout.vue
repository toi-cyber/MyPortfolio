<template>
  <q-layout view="hHh lpR fFf">

    <q-header flat>
      <q-toolbar class="header-menu">
        <q-btn flat label="About" to="/about" />
        <q-btn flat label="Works" to="/works" />
        <q-btn flat label="Contact" to="/contact-form" />
        <q-btn flat label="Skill" to="/skill" />
      </q-toolbar>
    </q-header>

    <q-page-container>
      <router-view />
    </q-page-container>

  </q-layout>
</template>
