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
                    <enrollment-form-user :submit-button="false"></enrollment-form-user>
                </wizard-step>
                <wizard-step title="Dades Personals">
                    <enrollment-form-person :submit-button="false"></enrollment-form-person>
                </wizard-step>
                <wizard-step title="Estudis i Curs">
                    <enrollment-form-test></enrollment-form-test>
                </wizard-step>
                <wizard-step title="Moduls Professionals">
                    <enrollment-form-test></enrollment-form-test>
                </wizard-step>
                <wizard-step title="Unitats Formatives">
                    <enrollment-form-test></enrollment-form-test>
                </wizard-step>
            </wizard>
        </div>
    </div>
@endsection
