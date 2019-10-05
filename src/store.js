import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    started: false,
    currentTurn: 0,
    playerHealth: 100,
    aiHealth: 100,
    playerMana: 100,
    gold: 300,
    potionCount: 0,
    manaPotion: 0,
    totalDamage: 0,
    turns: []
  },
  mutations: {

  },
  actions: {

  }
})
