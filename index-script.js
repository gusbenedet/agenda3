$(function() {
  $( "#data_select" ).datepicker();
});

$(function () {
  $(input[type='date'])
      .datepicker()
      .get(0)
      .setAttribute("type", "text");
})

var tabela = document.getElementById("tabela");
  tabela.innerHTML = [
  <table>
  <thead>
  <tr>
  <th>Hora</th>
  <th>Nome</th>
  <th>OBS.</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td>08h</td>
  <td>09h</td>
  <td>10h</td>
  </tr>
  <tr>
  <td>2</td>
  <td>data</td>
  <td>data</td>
  </tr>
  <tr>
  <td>3</td>
  <td>data</td>
  <td>data</td>
  </tr>
  </tbody>
  </table>
  ].join("\n");