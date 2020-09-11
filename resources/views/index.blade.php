
@extends('layout.app')
@section('conteudo')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
    <h4>DashBoard</h4>
    <div class="row">
        <div id="dashboard" class="jumbotron" style="background-color:green">
                
                <div class="conteudoDash">
                    Qtd Respondidas
                </div>
                <div class="numero" style="color:white">
                    5
                </div>
        </div>
        <div id="dashboard" class="jumbotron" style="background-color:rgb(255, 196, 0)">
            <div class="conteudoDash">
                Qtd Abertas
            </div>
            <div class="numero" style="color:black">
                15
            </div>
        </div>
        <div id="dashboard" class="jumbotron" style="background-color:rgba(0, 47, 255, 0.699)">
            <div class="conteudoDash">
                Qtd Concluidas
            </div>
            <div class="numero" style="color:white">
                55
            </div>
        </div>
    </div>
    <div class="row">
        <div class="dashboardGraph">
            <canvas id="bar-chart" width="800" height="450"></canvas>
        </div>
    </div>

    <script>
        new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio"],
            datasets: [
                {
                label: "Consultas x Mês",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                data: [2478,5267,734,784,433]
                }
            ]
            },
            options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Consultas x Mês'
            }
            }
        });
    </script>
   
@endsection