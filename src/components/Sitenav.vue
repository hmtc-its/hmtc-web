<template>
	<nav class="sitenav">
    <ul class="sitenav-items list-nostyle list-inline">
      <li class="sitenav-list"><router-link to="/articles" class="sitenav-anchor">articles</router-link></li>
      <li class="sitenav-list"><router-link to="/media" class="sitenav-anchor">media</router-link></li>
      <li class="sitenav-list"><router-link to="/about" class="sitenav-anchor">story</router-link></li>
      <li class="sitenav-list"><router-link to="/connect" class="sitenav-anchor">connect</router-link></li>
    </ul>
  </nav>
</template>

<script>
  export default {
    name: 'sitenav'
  }
</script>
