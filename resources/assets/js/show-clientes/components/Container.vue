<template>
	<div class="containerAnimal">
		<h4 class="text-center">
			Animais
			<button 
			:class="add ? 'btn btn-danger' : 'btn btn-success'" 
			@click="add = !add">
				{{ add ? 'X' : '+' }}
		</button>
		</h4>

		<hr>
		<transition name="slide-fade">
			<div v-if="add" class="addAnimal">
				<add-animal @AdicionarAnimal="addAnimal"/>
			</div>
		</transition>
		<list-animal :animais="this.$store.state.cliente.animais" @deleteAnimal="deleteAnimalChild" />
		
	</div>
</template>

<script>
	import ListAnimal from './ListAnimal';
	import AddAnimal from './AddAnimal';

	export default {
		name: 'Container',

		components: {
			'list-animal': ListAnimal,
			'add-animal': AddAnimal
		},

		props: ['cliente_id'],

		data () {
			return {
			  	add: false,
			}
		},

		mounted () {
			this.$store.dispatch('fetchCliente', {id: this.cliente_id})
		},

		methods: {
			deleteAnimalChild (animal) {
				if(confirm('Deletar Animal?')){
					this.$store.dispatch('deleteAnimal', {id: animal.id, cliente_id: this.cliente_id})
				}
			},
			addAnimal (form) {
				this.add = false
				this.$store.dispatch('addAnimal', {form: form, cliente_id: this.cliente_id})
			}
		}
	}
</script>

<style lang="scss" scoped>
	
	.containerAnimal{
		position: relative;

		.addAnimal{
			box-shadow: 1px 1px 1px 5px rgba(0,0,0,0.3);
			background-color: rgba(0,0,0,0.1);

			position: absolute;
			width: 30em;
			height: 15em;
			top: 100;
			right: 0;
		}	
	}

	.slide-fade-enter-active {
	  	transition: all .3s ease;
	}
	.slide-fade-leave-active {
	  	transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
	}
	.slide-fade-enter, .slide-fade-leave-to{
		transform: translateX(10px);
		opacity: 0;
	}
	
</style>