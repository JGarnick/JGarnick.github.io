import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
	state: {
		test: {
			'name': 'Banana Joe', 
			'str': 20, 
			'dex': 2,
			'con': 15,
			'wis': 12,
			'int': 10,
			'cha': 20,
			'level': 5,
			'race': 'orc',
			'class': 'awesome'
		}
	}
})