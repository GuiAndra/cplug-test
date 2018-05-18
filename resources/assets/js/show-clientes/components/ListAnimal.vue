<template>
	<div>
		<template v-if="animais">
			<div v-show="animais.length < 1">
				<p>Nenhum Animal para exibir</p>
			</div>	
		</template>
		<div v-for="(animal, key) in animais" class="list-container">
			<button class="btn btn-danger float-right" @click="clickDelete(key)">X</button>
			<p>Nome: {{ animal.nome }}</p>
			<p>Raça: {{ animal.raca }}</p>
			<p>Peso: {{ animal.peso }}</p>
			<hr>
		</div>
	</div>
</template>

<script>
export default {
  name: 'ListAnimal',
  props: ['animais'],
  methods: {
  	clickDelete(key) {
  		this.$emit('deleteAnimal', this.animais[key])
  	}
  }
}
</script>

<style lang="scss" scoped>
	.list-container{
		button{
			display: none;
		}

		&:hover{
			button{
				display: inline;
			}
		}
	}
</style>