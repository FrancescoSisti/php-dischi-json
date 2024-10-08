const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: []
        }
    },
    mounted() {
        this.fetchDischi()
    },
    methods: {
        fetchDischi() {
            axios
                .get('API/dischi.json')
                .then(response => {
                    this.dischi = response.data
                })
                .catch(error => {
                    console.error('Error fetching dischi:', error)
                })
        }
    }
}).mount('#app')