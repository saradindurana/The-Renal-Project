$(document).ready(function(){
    $.ajax({
      url : "http://localhost/Renal/patientdata.php",
      type : "GET",
      success : function(data){
        console.log(data)

        var doa = [];
        var pno = [];
      
        for(var i in data) {
          doa.push( data[i].date_of_admission);
          pno.push(data[i].patient_no);
        }
        var chartdata = {
          labels: doa,
          datasets: [
            {
              label: "Patients",
              fill: false,
              backgroundColor: "rgb(255,0,0)",
              borderColor: "rgb(0,128,0)",
              pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
              pointHoverBorderColor: "rgba(59, 89, 152, 1)",
              data: pno
            }
          ]
        };
  
        var ctx = $("#mycanvas");
  
        var LineGraph = new Chart(ctx, {
          type: 'line',
          data: chartdata
        });
      },
      error : function(data) {
  
      }
    });
  });