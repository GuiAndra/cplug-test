<template>
	<div>
		<div class="container mt-4">
			<div class="form-group">
	            <input type="text" class="form-control" placeholder="Nome" v-model="form.nome">
	        </div>
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Raça" v-model="form.raca">
	        </div>
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Peso" v-model="form.peso">
	        </div>
	        <button class="btn btn-success float-right" @click="adicionarAnimal">Adicionar</button>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'AddAnimal',
		data () {
			return {
				form:{
					nome: '',
					raca: '',
					peso: ''
				}
			}
		},
		methods: {
			adicionarAnimal () {
				this.$emit('AdicionarAnimal', this.form)
			}
		}
	}
</script>

<style lang="scss" scoped>

</style>