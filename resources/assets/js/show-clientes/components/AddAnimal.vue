<template>
	<div>
		<div class="container mt-4">
			<div class="form-group">
	            <input type="text" class="form-control" placeholder="Nome" required v-model="form.nome">
	        </div>
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Raça" required v-model="form.raca">
	        </div>
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Peso" required v-model="form.peso">
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
				if(this.form.nome == ''){
					alert('nome não pode ser vazio')
				}
				else if(this.form.raca == ''){
					alert('raça não pode ser vazio')
				}
				else if(this.form.peso == ''){
					alert('peso não pode ser vazio')
				}
				else{
					this.$emit('AdicionarAnimal', this.form)
				}
			}
		}
	}
</script>

<style lang="scss" scoped>

</style>