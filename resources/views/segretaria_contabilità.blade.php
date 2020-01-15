@extends('templates.base')
@section('corpo')
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1 class="mt-5 p-3 border border-dark">Contabilità</h1>
        </div>
        <div class="col-0 col-lg-2"></div>
        <div class="col-12 col-lg-8">
            <div><select>
                    <option value="Categoria 1">Categoria 1</option>
                    <option value="Categoria 2">Categoria 2</option>
                    <option value="Categoria 3">Categoria 3</option>
                    <option value="Categoria 4">Categoria 4</option>
                </select>
                <select>
                    <option value="Giorno">Giorno</option>
                    <option value="Settimana">Settimana</option>
                    <option value="Mese">Mese</option>
                    <option value="Anno">Anno</option>
                </select>
                <select>
                    <option value="Entrate">Entrate</option>
                    <option value="Uscite">Uscite</option>
                </select></div>

            <h4>Ricerca tramite Nome</h4>
            <div class="form-group input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
          <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>
          </button>
        </span>
            </div>

            <h4> </h4>
            </div>
    </div>
        @endsection
