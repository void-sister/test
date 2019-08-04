<template>
    <div>

            <table class="table table-bordered">
                <tr>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Bedrooms</th>
                  <th>Bathrooms</th>
                  <th>Storeys</th>
                  <th>Garages</th>
                </tr>
                <tr>
                  <td>Jill</td>
                  <td>Smith</td>
                  <td>50</td>
                  <td>50</td>
                  <td>50</td>
                  <td>50</td>
                </tr>
            </table>
        </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
