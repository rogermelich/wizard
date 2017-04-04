@extends('adminlte::page')

@section('htmlheader_title')
    Change Title here!
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <h2>Progress</h2>
            <div class="progress progress-sm active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                </div>
            </div>

            <h4>Matrícula</h4>
            <wizard>
                <wizard-step title="Usuari" active="true">
                    Step 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, laborum.
                </wizard-step>
                <wizard-step title="Dades Personals">
                    Step 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, aut!
                </wizard-step>
                <wizard-step title="Estudis i Curs">
                    Step 3: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, harum.
                </wizard-step>
                <wizard-step title="Moduls Professionals">
                    Step 4: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quod.
                </wizard-step>
                <wizard-step title="Unitats Formatives">
                    Step 5: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, tempore.
                </wizard-step>
            </wizard>
        </div>
    </div>
@endsection
