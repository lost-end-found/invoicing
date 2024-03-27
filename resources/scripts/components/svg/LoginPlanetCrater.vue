<template>
  <img :src="getImage()" class="block w-48 h-auto max-w-full mb-32 text-primary-500" />
</template>
<script setup>

const getImage = () => {
  const imgUrl = new URL('/img/home-chat.png', import.meta.url)
  console.log(imgUrl)
  return imgUrl
}
</script>
