(function( Vue ) {
  new Vue({
    el: '#demo1',
    data: {
      phrase: ''
    },
    computed: {
      length: function () {
        return this.phrase.length;
      }
    }
  });

  new Vue({
    el: '#demo2',
    data: {
      users: []
    },
    ready: function() {
      // GET /users
      this.$http.get('/users').then(
        function (response) {
          // Success handler.
          this.users = response.data;
        },
        function (response) {
          // Error handler.
          console.log('Some error occured.');
        }
      );
    }
  });
})(Vue);
