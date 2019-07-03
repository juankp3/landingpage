<div class="sf-form">
    <form id="mainForm" action="/landing1/thanks" method="post">
        <div class="form-top">
            <div class="conent-text">
                <h4>SOLICITA INFORMACIÓN Y OBTÉN UN <strong>5% DE DESCUENTO</strong></h4>
                <div class="content_cards">
                    <div class="txt_cards">Aceptamos todas las tarjetas :</div>
                    <!--<div class="img_cards"><img src="../../../assets/img/paymentsmethods.png" alt="" title="visa,american express,mastercard,paypal"></div>-->
                    <div class="img_cards">
                        <img src="/assets/img/visa.png" alt="" title="visa">
                        <img src="/assets/img/american.png" alt="" title="american">
                        <img src="/assets/img/master.png" alt="" title="master">
                        <img src="/assets/img/paypal.png" alt="" title="paypal">
                    </div>

                </div>
                <p>( Incluye plano de distribución del proyecto )</p>
            </div>
            <div class="input">
                <input name="name" class="inputtext" type="text" placeholder="Nombre" required>
            </div> 
            <div class="input">
                <input name="email" type="email" placeholder="Correo" required> 
            </div>
            <div class="input">
                <input name="phone" type="number" placeholder="Teléfono" required>
            </div>
            <div class="select">
                <select name="area">
                    <option value="">- Seleccione Área -</option>
                    <option value="sala">Sala</option>
                    <option value="cocina">Cocina</option>
                    <option value="dormitorio">Dormitorio</option>
                    <option value="comedor">Comedor</option>
                    <option value="bano">Baño</option>
                </select>
            </div>

            <div class="textarea">
                <textarea name="message" placeholder="Hola estoy interesado (a), solicito más información." cols="" rows="5" required></textarea>
            </div>
        </div>
        <div class="form-bottom">
            <div class="sf_btn">
                <button id="mainButton" class="btn-content-solid-2" type="submit">SOLICITAR INFORMACIÓN</button>
            </div>
        </div>
    </form>
</div>