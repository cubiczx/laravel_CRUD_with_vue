<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item" v-if="pagination.current_page > 1">
    	<a class="page-link" href="#" @click.prevent="changePage(pagination.current_page - 1)">Previous</a>
    </li>
    <li class="page-item" v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
    	<a class="page-link" href="#" @click.prevent="changePage(page)" >@{{ page }}</a>
    </li>
    <li class="page-item" v-if="pagination.current_page < pagination.last_page">
    	<a class="page-link" href="#"  @click.prevent="changePage(pagination.current_page + 1)">Next</a>
    </li>
  </ul>
</nav>