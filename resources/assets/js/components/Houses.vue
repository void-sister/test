<template>
    <div>
      <form @submit.prevent="searchHouses" class="mb-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="search-name"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="House name"
              aria-label="Housename" aria-describedby="search-name"
              v-model="search.name">
        </div>


        <p>Price</p>
        <div class="form-inline mb-3">
            <div class="col-xs-2">
              <input type="text" class="form-control" placeholder="from" v-model="search.price_more">
            </div>
            <div class="col-xs-2">
              <input type="text" class="form-control" placeholder="to" v-model="search.price_less">
            </div>
        </div>

        <div class="form-row mb-3">
            <label for="bedrooms">Bedrooms</label>
            <div class="col-2">
                <input type="number" class="form-control" id="bedrooms" v-model="search.bedrooms">
            </div>

            <label for="bathrooms">Bathrooms</label>
            <div class="col-2">
                <input type="number" class="form-control" id="bathrooms" v-model="search.bathrooms">
            </div>

            <label for="storeys">Storeys</label>
            <div class="col-2">
                <input type="number" class="form-control" id="storeys" v-model="search.storeys">
            </div>

            <label for="garages">Garages</label>
            <div class="col-2">
                <input type="number" class="form-control" id="garages" v-model="search.garages">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">
            <span v-if="found">Search</span>
            <span v-if="!found" class="spinner-border spinner-border-sm"></span><span v-if="!found">Searching...</span>
        </button>
      </form>

      <table class="table table-bordered">
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Bedrooms</th>
            <th>Bathrooms</th>
            <th>Storeys</th>
            <th>Garages</th>
          </tr>
          <span v-if="!houses.length">No results.</span>
          <tr v-for="house in houses" v-bind:key="house.id">
            <td>{{ house.name }}</td>
            <td>${{ house.price }}</td>
            <td>{{ house.bedrooms }}</td>
            <td>{{ house.bathrooms }}</td>
            <td>{{ house.storeys }}</td>
            <td>{{ house.garages }}</td>
          </tr>
      </table>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        houses: [],
        search: {
          name: '',
          price_more: '',
          price_less:'',
          bedrooms: '',
          bathrooms: '',
          storeys:'',
          garages: ''
        },
        found: true
      }
    },

    created(){
      this.fetchHouses();
    },

    methods: {
      fetchHouses(){
        this.found = false;
        fetch('api/houses')
          .then(res => res.json())
          .then(data => {
            this.houses = data.data;
            this.found = true;
        })
      },
      searchHouses(){
        this.found = false;
        axios.get('/api/houses/search', {
            params: this.search})
        .then(response => {
            this.houses = response.data;
            this.found = true;
        })
        .catch(error => {});
      }
    }
  }
</script>
