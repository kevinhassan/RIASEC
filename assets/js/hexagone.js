var ctx = $("#myChart");

if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp1=new XMLHttpRequest();
    var xmlhttp2=new XMLHttpRequest();
} else { // code for IE6, IE5
    var xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
    var xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp1.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
        var res1 = JSON.parse(this.response);//Convertir le string en JSON
        return res1;
    }
};
xmlhttp2.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var res2 = JSON.parse(this.response);//Convertir le string en JSON
        return res2;
    }
};

xmlhttp1.open("GET","./?query=resultat/showEtudiantResultat",false);//False car requête synchrone
xmlhttp1.send();
xmlhttp2.open("GET","./?query=resultat/showClasseResultat",false);
xmlhttp2.send();

var res1 = xmlhttp1.onreadystatechange();
var res2 = xmlhttp2.onreadystatechange();

var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ["Réaliste", "Investigatif", "Artistique", "Social", "Entrepreneur", "Conventionnel"],
        datasets: [
            {
                label: "Moi",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                pointBackgroundColor: "rgba(255,99,132,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(255,99,132,1)",
                data: [res1[1], res1[2], res1[3], res1[4], res1[5], res1[6]]
            },
            {
                label: "Classe",
                backgroundColor: "rgba(99,25,132,0.2)",
                borderColor: "rgba(99,255,132,1)",
                pointBackgroundColor: "rgba(99,255,132,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(99,255,132,1)",
                data: [res2[1], res2[2], res2[3], res2[4], res2[5], res2[6]]
            }
        ]
    }, options: {
        scale: {
            reverse: false,
            ticks: {
                beginAtZero: true
            }
        }
    }
});
