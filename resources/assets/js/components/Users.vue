<template>
	<table class="table table-bordered table-stripped table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="u in list">
				<td>{{ u.name }}</td>
				<td>{{ u.email }}</td>
			</tr>
		</tbody>
	</table>
</template>
<script>
    export default {
    	props: ['users'],
    	data () {
    		return {
    			list: [],
    			sortProperty: 'name',
    			sortDirection: 1,
    		}
    	},
        mounted() {
            this.list = JSON.parse(this.users)
        }
    }
</script>