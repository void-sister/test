<template>
    <div id="search_form">
      <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-search"></i></div>
            <input type="text" class="form-control" id="hotel_name" placeholder="Hotel name">
          </div>
      </div>

      <p>Price</p>
      <div class="row">
          <div class="col-xs-2">
            <input type="text" class="form-control" placeholder="from">
          </div>
          <div class="col-xs-2">
            <input type="text" class="form-control" placeholder="to">
          </div>
      </div>

      <div id="properties">


      <p>Bedrooms</p>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bedrooms" id="bedrooms1" value="bedrooms1">
            1
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bedrooms" id="bedrooms2" value="bedrooms2">
            2
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bedrooms" id="bedrooms3" value="bedrooms3">
            3
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bedrooms" id="bedrooms4" value="bedrooms4">
            4
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bedrooms" id="bedrooms5" value="bedrooms5">
            5
          </label>
      </div>


      <p>Bathrooms</p>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bathrooms" id="bathrooms1" value="bathrooms1">
            1
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bathrooms" id="bathrooms2" value="bathrooms2">
            2
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bathrooms" id="bathrooms3" value="bathrooms3">
            3
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bathrooms" id="bathrooms4" value="bathrooms4">
            4
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="bathrooms" id="bathrooms5" value="bathrooms5">
            5
          </label>
      </div>


      <p>Storeys</p>
      <div class="radio-inline">
          <label>
            <input type="radio" name="storeys" id="storeys1" value="storeys1">
            1
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="storeys" id="storeys2" value="storeys2">
            2
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="storeys" id="storeys3" value="storeys3">
            3
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="storeys" id="storeys4" value="storeys4">
            4
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="storeys" id="storeys5" value="storeys5">
            5
          </label>
      </div>


      <p>Garages</p>
      <div class="radio-inline">
          <label>
            <input type="radio" name="garages" id="garages1" value="garages1">
            1
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="garages" id="garages2" value="garages2">
            2
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="garages" id="garages3" value="garages3">
            3
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="garages" id="garages4" value="garages4">
            4
          </label>
      </div>
      <div class="radio-inline">
          <label>
            <input type="radio" name="garages" id="garages5" value="garages5">
            5
          </label>
      </div>

      </div>

    </div>


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
