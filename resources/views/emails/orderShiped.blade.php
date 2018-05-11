  <h1>Jusu Uzsakymas</h1>
@foreach ($produktai as $product)
  <li>Produkto Pavadinimas: {{$product['item']['title']}}</li>
@endforeach
<li>Kiekis: {{$totalprice}} vnt.</li>
<li>Viso: {{$total}}</li>
