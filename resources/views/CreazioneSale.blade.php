@extends('templates.base', ['menu' => "off"])
@section('corpo')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div>
                    <p style="text-align: center"><img style="width: 221px;margin-left:-0.5rem"
                                                       src="{{asset('img/logo_gym3.png')}}" alt="Logo">
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">

                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                    id="fornitore">COMPLETA REGISTRAZIONE</h1>
            </div>
        </div>

        <div class="col-12 col-lg-12">
            <div class="row mt-5">
                <h5 class="px-2"
                    style="margin-top: -0.75rem; margin-left: 3rem; color: gray; position:absolute; z-index: 2; background-color: #f4f7fa; font-weight: normal">
                    GIORNI APERTURA
                </h5></div>
             <form action="/CreazioneSale/{{$associazione->id}}" method="post">
                 @csrf
                 @method('PATCH')

                <div class="row mx-4 mb-5">
                    <div class="col-12 col-lg-12"
                         style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">

                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">

                                <div class="form-group">
                                    <label for="giorni_dal" class="mb-0"><h5>Dal</h5></label>
                                    <select class="custom-select" name="giorni_dal" id="giorni_dal"
                                            required>
                                        <option value="" disabled selected hidden>Scegli un'opzione</option>

                                        <option value="1">Lunedi</option>
                                        <option value="2">Martedi</option>
                                        <option value="3">Mercoledi</option>
                                        <option value="4">Giovedi</option>
                                        <option value="5">Venerdi</option>
                                        <option value="6">Sabato</option>
                                        <option value="7">Domenica</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="giorni_al" class="mb-0"><h5>Al</h5></label>
                                    <select class="custom-select" name="giorni_al" id="giorni_al"
                                            required onchange="Inserimento()">
                                        <option value="" disabled selected hidden>Scegli un'opzione</option>

                                        <option value="1">Lunedi</option>
                                        <option value="2">Martedi</option>
                                        <option value="3">Mercoledi</option>
                                        <option value="4">Giovedi</option>
                                        <option value="5">Venerdi</option>
                                        <option value="6">Sabato</option>
                                        <option value="7">Domenica</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-12 col-lg-12">
                    <div class="row mt-5">
                        <h5 class="px-2"
                            style="margin-top: -0.75rem; margin-left: 2rem; color: gray; position:absolute; z-index: 2; background-color: #f4f7fa; font-weight: normal">
                            ORARIO APERTURA
                        </h5></div>
                    <div class="row mx-2 mb-5">
                        <div class="col-12 col-lg-12"
                             style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">
                            <div class="row mt-2">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="orario_dal" class="mb-0"><h5>Dal</h5></label>
                                        <select class="custom-select" name="orario_dal" id="orario_dal"
                                                required>
                                            <option value="" disabled selected hidden>Scegli un'opzione</option>

                                            <option value="5">5.00</option>
                                            <option value="6">6.00</option>
                                            <option value="7">7.00</option>
                                            <option value="8">8.00</option>
                                            <option value="9">9.00</option>
                                            <option value="10">10.00</option>
                                            <option value="11">11.00</option>
                                            <option value="12">12.00</option>
                                            <option value="13">13.00</option>
                                            <option value="14">14.00</option>
                                            <option value="15">15.00</option>
                                            <option value="16">16.00</option>
                                            <option value="17">17.00</option>
                                            <option value="18">18.00</option>
                                            <option value="19">19.00</option>
                                            <option value="20">20.00</option>
                                            <option value="21">21.00</option>
                                            <option value="22">22.00</option>
                                            <option value="23">23.00</option>
                                            <option value="24">24.00</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="orario_al" class="mb-0"><h5>Al</h5></label>
                                        <select class="custom-select" name="orario_al" id="orario_al"
                                                required onchange="Inserimento()">
                                            <option value="" disabled selected hidden>Scegli un'opzione</option>

                                            <option value="5">5.00</option>
                                            <option value="6">6.00</option>
                                            <option value="7">7.00</option>
                                            <option value="8">8.00</option>
                                            <option value="9">9.00</option>
                                            <option value="10">10.00</option>
                                            <option value="11">11.00</option>
                                            <option value="12">12.00</option>
                                            <option value="13">13.00</option>
                                            <option value="14">14.00</option>
                                            <option value="15">15.00</option>
                                            <option value="16">16.00</option>
                                            <option value="17">17.00</option>
                                            <option value="18">18.00</option>
                                            <option value="19">19.00</option>
                                            <option value="20">20.00</option>
                                            <option value="21">21.00</option>
                                            <option value="22">22.00</option>
                                            <option value="23">23.00</option>
                                            <option value="24">24.00</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-12 col-lg-12">
                     <div class="row mt-5">
                         <h5 class="px-2"
                             style="margin-top: -0.75rem; margin-left: 2rem; color: gray; position:absolute; z-index: 2; background-color: #f4f7fa; font-weight: normal">
                             SELEZIONE SCONTO PER PACCHETTO CORSI
                         </h5></div>
                     <div class="row mx-2 mb-5">
                         <div class="col-12 col-lg-12"
                              style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">
                             <div class="row mt-2">
                                 <div class="col-12 col-lg-6">
                                     <div class="form-group">
                                         <label for="sconto_dal" class="mb-0"><h5>Dal corso selezionato numero</h5></label>
                                         <select class="custom-select" name="sconto_dal" id="sconto_dal"
                                                 required>
                                             <option value="" disabled selected hidden>Scegli un'opzione</option>

                                             <option value="1">Nessuno</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                             <option value="5">5</option>
                                             <option value="6">6</option>
                                             <option value="7">7</option>
                                             <option value="8">8</option>
                                             <option value="9">9</option>
                                             <option value="10">10</option>
                                             <option value="11">11</option>
                                             <option value="12">12</option>
                                             <option value="13">13</option>
                                             <option value="14">14</option>
                                             <option value="15">15</option>
                                             <option value="16">16</option>
                                             <option value="27">17</option>
                                             <option value="18">18</option>
                                             <option value="19">19</option>
                                             <option value="20">20</option>
                                             <option value="21">21</option>

                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-12 col-lg-6">
                                     <div class="form-group">
                                         <label for="sconto" class="mb-0"><h5>Sconto</h5></label>
                                         <select class="custom-select" name="sconto" id="sconto"
                                                 required>
                                             <option value="" disabled selected hidden>Scegli un'opzione</option>

                                             <option value="1">Nessuno</option>
                                             <option value="2">2 %</option>
                                             <option value="5">5 %</option>
                                             <option value="8">8 %</option>
                                             <option value="10">10 %</option>
                                             <option value="15">15 %</option>
                                             <option value="20">20 %</option>
                                             <option value="25">25 %</option>
                                             <option value="30">30 %</option>
                                             <option value="35">35 %</option>
                                             <option value="40">40 %</option>
                                             <option value="45">45 %</option>
                                             <option value="50">50 %</option>

                                         </select>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                <div class="col-12 col-lg-12">
                    <div class="row mt-5">
                        <h5 class="px-2"
                            style="margin-top: -0.75rem; margin-left: 2rem; color: gray; position:absolute; z-index: 2; background-color: #f4f7fa; font-weight: normal">
                            AGGIUNGI SALA
                        </h5></div>
                    <div class="row mx-2 mb-5">
                        <div class="col-12 col-lg-12"
                             style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">
                            <div class="row mt-2">
                                <div class="container container-fluid mt-5"> <!-- Margine superiore modificabile se 5 è troppo-->
                                    <div class="jumbotron_no_pad jumbotron-fluid">
                                        <div class="card">
                                            <div class="card-body">


                                                <div class="form-group">
                                                    <input type="button" onclick="window.location.replace('{{route('sala.create')}}')"
                                                           class="btn btn-dark" style="font-size: 18px" name="Aggiungi_Sala"
                                                           id="Aggiungi_sala" value="Aggiungi Sala">
                                                </div>


                                                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                    <table class="table table-hover table-bordered table-striped js-sort-table " id="tabella_sale">
                                                        <thead class="thead-dark">
                                                        <!--js-sort-asc: ascending sort
                                                            js-sort-desc: descending sort
                                                            js-sort-0: zero-based number of the sorted column
                                                            js-sort-string: sort by string
                                                            js-sort-date: sort by date
                                                            js-sort-number: sort by number
                                                            js-sort-last: sort by the last word
                                                            js-sort-input: sort by the input value
                                                        -->
                                                        <tr>
                                                            <th scope="col" style="cursor: pointer">Elimina</th>
                                                            <th scope="col" class="text-right" style="cursor: pointer">Numero</th>
                                                            <th scope="col" style="cursor: pointer">Nome</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($sala as $sala) <!-- Qui abbiamo la variabile sala passata dal controller  -->
                                                        <form>
                                                            <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                                        <tr>
                                                            <td>
                                                                <a href="/CreazioneSale/{{$sala->id}}/delete">
                                                                    <img type="image" src="{{asset('img/cestino.png')}}" width="25" height="25">
                                                                </a>
                                                            </td>
                                                            <td class="text-right">
                                                                {{$sala->id}}
                                                            </td>

                                                            <td>
                                                                {{$sala->nome}}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </form>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mt-n3">
                    <div class="form-group float-left">
                        <input type="button" onclick="window.location.replace('{{route('login')}}')"
                               class="btn btn-dark" style="font-size: 22px" name="annulla"
                               id="annulla" value="Annulla">
                    </div>
                    <div class="form-group float-right">
                        <input type="submit"  class="btn btn-dark" style="font-size: 22px" name="continua"
                               id="continua" value="Continua">
                    </div>
                </div>

             </form>
        </div>
    </div>
@endsection
