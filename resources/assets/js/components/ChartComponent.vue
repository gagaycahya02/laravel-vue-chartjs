<script>
    import { Line } from 'vue-chartjs'

    export default {
        extends: Line,
        mounted() {
            let uri = 'http://localhost:8000/coins'
            let years = []
            let labels = []
            let prices = []

            this.axios.get(uri).then((response) => {
                let data = response.data

                if(data){
                    data.forEach(element => {
                        years.push(element.year)
                        labels.push(element.year)
                        prices.push(element.price)
                    })

                    this.renderChart({
                        labels: years,
                        datasets: [{
                            label: 'Bitcoin',
                            backgroundColor: '#FC2525',
                            data: prices
                        }]
                    },{responsive: true, maintainAspectRatio: false })
                }else{
                    console.log('No data')
                }
            })
        }    
    }
</script>
