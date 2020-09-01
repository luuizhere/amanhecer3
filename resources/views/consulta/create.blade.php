<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<div id="app">
    <form action="/consulta" method="post">
        @csrf
        <div>
            <select v-on:change="somar" name="paciente" id="paciente">
                <option  value="">Selecione</option>
                @foreach($pacientes as $paciente)
                    <option value="">{{$paciente->nome}}</option>
                @endforeach
            </select>
        </div>
        <div v-if="teste" >
            <select name="nivel" id="nivel">
                <option value="">Selecione</option>
                @foreach($niveis as $nivel)
                    <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
                @endforeach
            </select>
        </div>
        <div v-if="teste">
            <select name="atividade" id="atividade">
                <option value="">Selecione</option>
                @foreach($atividades as $atividade)
                    <option value="{{$atividade->id}}">{{$atividade->nome}}</option>
                @endforeach
            </select>
        </div>
        <div v-if="teste">
            <select name="resposta" id="resposta">
                <option value="">Selecione</option>
                @foreach($respostas as $resposta)
                    <option value="{{$resposta->id}}">{{$resposta->sigla}}</option>
                @endforeach
            </select>
        </div>
        <div v-if="teste">
            <input type="date" name="data" value="{{date('Y-m-d')}}" readonly>
        </div>
    </form>

    {{ `resultado` }}
</div>

<script>
    new Vue({
        el: "#app",
        data:{
            teste: false,
            resultado : ''
        },
        methods:{
            somar(){
                alert('mudou')
                this.teste = true
            }
        },
        mounted () {
            axios
                .get('localhost:8000/api/habilidades/1')
                .then(response => (this.resultado = response))

                console.log(this.resultado)
        }
    })
</script>