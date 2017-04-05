@extends('adminlte::page')

@section('htmlheader_title')
    Change Title here!
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">

            <h4>Matrícula</h4>

            <wizard>
                <wizard-step title="Usuari" active="true">
                    Step 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, laborum.
                    <form-user></form-user>
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
