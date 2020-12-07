<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <v-app>
    <v-btn>DISABLE ME</v-btn>

    </v-app>
</body>
<script>

var app2 = new Vue({
  el: "#app",
  vuetify: new Vuetify(),
  data: {
    buttons: [false, false, false]
  },
  methods: {
    onClick(index) {
      if (this.buttons.every(b => !b)) {
        this.buttons = this.buttons.map((b, i) => (i === index ? false : true));
      } else {
        this.buttons = this.buttons.map(b => false);
      }
    }
  }
});
</script>
</html>

