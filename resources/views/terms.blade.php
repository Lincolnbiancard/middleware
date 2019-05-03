<p>Mussum Ipsum, cacilds vidis litro abertis. A ordem dos tratores não altera o pão duris. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Cevadis im ampola pa arma uma pindureta. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

<p>Casamentiss faiz malandris se pirulitá. Detraxit consequat et quo num tendi nada. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Atirei o pau no gatis, per gatis num morreus.</p>

<p>Per aumento de cachacis, eu reclamis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Quem manda na minha terra sou euzis! Manduma pindureta quium dia nois paga.</p>
<br>
@if(Session::has('error'))
<h1 style="color:red;">{{ Session::get('error') }}</h1>
@endif


<form action="{!! route('terms.accept') !!}" method="POST"> 
@csrf
    <label for="">
        <input type="checkbox" name="acceptterms" value="true">Aceito os termos de uso!
    </label>
    <br>
    <button type="submit">Salvar</button>
</form>