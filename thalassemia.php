<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>

  <?php require_once "header.php" ?>

  <main id="main-body">

    <section id="thalassemia-banner" class="animate">
      <div class="container pt-3 pt-lg-5">
        <div class="pt-5"></div>
        <h1>
          Building<br>
          A Better Tomorrow,<br>
          <span class="primary-color">
            With Every Drop Of<br>
            Blood Donated.
          </span>
        </h1>
        <button class="btn btn-custom-secondary mt-3">Know More</button>
        <button class="btn btn-custom-primary mt-3">Support Us</button>
      </div>
    </section>

    <section id="what-is-thalassemia" class="animate">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-md-6">
            <h4 class="mt-3 secondary-color">
              What is
              <span class="primary-color">Thalassemia</span>
            </h4>
            <p class="pt-3">Thalassemia is a group of inherited blood disorders characterized by abnormal hemoglobin production. Hemoglobin is a protein in red blood cells that carries oxygen throughout the body.</p>
            <p class="pt-3">People with thalassemia have reduced or absent hemoglobin production, which results in anemia (a shortage of red blood cells).</p>
          </div>
          <div class="offset-xl-1 col-xl-6 col-md-6 d-flex align-items-center">
            <img src="images/thalassemia/thalassemia.png" alt="What is Thalassemia" class="w-100" />
          </div>
        </div>
      </div>
    </section>

    <section id="thalassemia-classification" class="py-5 mt-md-5 animate">
      <div class="container">
        <h3 class="secondary-color text-center">Thalassemia is classified into two main types</h3>
        <img src="images/thalassemia/dividers.png" alt="Divider" class="w-50 mx-auto d-sm-block d-none">
        <div class="row">

          <div class="col-sm-6">
            <h3 class="secondary-color text-center mt-2"><span class="primary-color">Alpha</span>-Thalassemia</h3>
            <div class="icon-card bg-custom-tertiary">
              <p class="content text-start quaternary-color p-3 fw-normal">
                Alpha-thalassemia occurs when there is a problem with the production of the alpha globin chain of hemoglobin. There are four genes that control the production of alpha globin, if one or more of these genes are missing or not functioning properly, it can cause alpha-thalassemia.
              </p>
            </div>
          </div>

          <div class="col-sm-6">
            <h3 class="secondary-color text-center mt-sm-2 mt-5"><span class="primary-color">Beta</span>-Thalassemia</h3>
            <div class="icon-card bg-custom-tertiary">
              <p class="content text-start quaternary-color p-3 fw-normal">
                Beta-Thalassemia Major is a genetic blood disorder. It is also called "Cooley's Anemia" or or simply "Thalassemia". Beta-Thalassemia Major is characterized by the inability of the body to produce appropriate hemoglobin, results in inadequate delivery of oxygen to the different cells of the body. The disorder, in most cases, is diagnosed in the first year of the life of the child.
              </p>
            </div>
          </div>

          <div class="col-sm-12 mt-5">
            <div class="icon-card bg-custom-tertiary">
              <p class="content text-start quaternary-color p-3 fw-normal">
                Symptoms of thalassemia can vary depending on the type and severity of the disorder. Common symptoms include fatigue, weakness, paleness, slow growth, and bone deformities.<br /><br />
                Thalassemia is diagnosed by a combination of blood tests, including complete blood count (CBC), hemoglobin electrophoresis, and genetic testing.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="thalassemia-treatment" class="py-5 animate">
      <div class="container">
        <h3 class="text-center secondary-color"><span class="primary-color">Management (Care)</span> for Thalassemia</h3>

        <div class="row pt-sm-5 pt-3 justify-content-center">
          <div class="col-sm-7">
            <h3 class="primary-color"><span class="secondary-color">Regular</span> Blood Transfusions</h3>
            <p>
              Blood transfusions are medical procedures in which blood or blood components are transferred from one person (donor) into the bloodstream of another person (recipient).<br /><br />
              The goal of blood transfusions is to replace lost blood, correct anemia, or treat certain medical conditions by providing essential components such as red blood cells, platelets, or plasma. The blood must be compatible with the recipient's blood type to avoid adverse reactions.
            </p>
          </div>
          <div class="col-sm-2 d-flex align-items-center">
            <img class="w-100" src="images/thalassemia/regular-blood-transfusions.png" alt="Regular Blood Transfusions">
          </div>
        </div>

        <div class="row pt-5 justify-content-center">
          <div class="col-sm-3 d-flex align-items-center order-2 order-sm-2">
            <img class="w-100" src="images/thalassemia/chelation-therapy.png" alt="Regular Blood Transfusions">
          </div>
          <div class="col-sm-7 order-1">
            <h3 class="primary-color"><span class="secondary-color">Chelation</span> Therapy</h3>
            <p>
              Chelation therapy is a medical treatment in which a synthetic solution (chelating agent) is administered to a patient intravenously to remove heavy metals, minerals, and other toxic substances from the body.<br /><br />
              It is commonly used for individuals with high levels of lead or other heavy metals in the bloodstream and for individuals with metal toxicity due to occupational or environmental exposure.
            </p>
          </div>
        </div>


        <div class="row pt-5 justify-content-center">
          <div class="col-sm-7 pt-5">
            <h3 class="primary-color">Bone Marrow <span class="secondary-color">Transplant</span></h3>
            <p>
              Bone Marrow Transplant can help cure the disease and prevent serious complications, such as anemia and organ damage.<br /><br />
              The success of BMT depends on various factors, such as the patient's age, overall health, and the availability of a suitable donor.
            </p>
          </div>
          <div class="col-sm-4 d-flex align-items-center">
            <img class="w-100" src="images/thalassemia/bone-arrow-transplant.png" alt="Regular Blood Transfusions">
          </div>
        </div>

        <section id="thalassemia-qna" class="py-5 mt-sm-5">
          <div class="container">
            <h4 class="primary-color text-center">You ask, We answer</h4>
            <div class="accordion pt-sm-5 pt-3 custom-accordion" id="thalassemia-accordion">
            <?php
              $accordionData = [
                [
                  "title"   =>  "Is the subject of Thalassemia important for me?",
                  "content" =>  "Autem quo minus et quod! Veritatis, eveniet unde. Animi nam reprehenderit fugiat illum ad quibusdam ab quidem sed voluptatem. Et sit molestiae quis modi? Sint maiores aut sed quisquam tenetur, rerum est quam deserunt odio ea veniam maxime quis excepturi quasi dolore quas id hic quaerat. Consectetur accusantium porro illum debitis necessitatibus dolor, at aspernatur voluptates corporis earum sit blanditiis, cum ut provident quidem, animi deserunt veniam iste quae. Ut iusto voluptate ipsa iure, id aliquid officiis explicabo ad in? Totam quaerat officiis voluptas excepturi praesentium esse, animi alias ipsa, beatae voluptates inventore provident amet tempora cupiditate nostrum debitis repellat. Tempora repellendus dolorem perferendis rem odit possimus ex ratione mollitia laboriosam molestiae, assumenda quia? Exercitationem reprehenderit nam veritatis tenetur autem fuga est iure iusto vero odit a repudiandae nostrum soluta suscipit, hic magnam ab ipsum explicabo aliquid. Omnis autem eum voluptatibus quos doloribus repudiandae possimus maxime est, ullam at."
                ],
                [
                  "title"   =>  "Why?",
                  "content" =>  "Aeprehenderit distinctio, soluta ea modi harum totam earum rerum reiciendis fugiat? Inventore aut aliquam qui sequi asperiores sunt optio illo! Cupiditate repellendus facilis soluta eius, distinctio libero ratione, saepe numquam id voluptate natus ipsa explicabo placeat aliquam culpa consequuntur quas quia inventore dolore suscipit. Maxime, quam? At, accusantium suscipit, veritatis provident expedita odio, sunt corrupti dolor illo reprehenderit ducimus cupiditate molestiae! Laudantium odio ea error iste consequuntur, quos dolor, illo voluptatibus quaerat nemo quibusdam repellat sequi corporis, natus porro praesentium dolorem rerum deserunt fugit? Possimus, assumenda voluptas quisquam repellendus rerum quae alias ipsum illo incidunt odio, exercitationem nisi dolorem ut nesciunt inventore natus magni? Voluptatum iusto quis possimus aliquid modi nisi quia cumque. Hic, magni vero reprehenderit obcaecati alias id. Repellendus totam officia, quae dolor eaque voluptatibus officiis impedit, eligendi ducimus corrupti perferendis eum quia molestias porro cupiditate velit illum. Suscipit natus vitae id quidem nostrum eum sapiente."
                ],
                [
                  "title"   =>  "WHat risk?",
                  "content" =>  "Aum maxime possimus rem maiores sequi quaerat deleniti distinctio repellat aut consequuntur? Repellat amet reprehenderit dolorem qui, perferendis quisquam, molestias nesciunt esse dolore fuga voluptatum. Dolores quibusdam laborum vel illum aut! Quia assumenda iure sunt ullam maiores perferendis quam quibusdam quae vitae, qui hic incidunt magnam, officia at voluptatum a molestiae eius, quas voluptatem est culpa alias accusantium eveniet? Nisi enim, molestiae distinctio saepe doloremque perferendis voluptates natus aperiam eaque recusandae impedit in a quia culpa illo cum beatae accusantium vitae ad commodi quasi tempora. Odio numquam voluptatum dolorum at et vel consequuntur doloribus ipsam iure perspiciatis quae mollitia illo aut sapiente dolore vitae cum, nostrum, animi quaerat qui? Voluptates ipsam commodi consectetur quas ratione earum velit fuga incidunt aperiam, magnam ipsa repellat nesciunt. Aperiam earum, in consequuntur nobis quae accusantium dolore doloremque. Quos quam voluptatum perspiciatis consectetur quo sequi officia natus ipsa consequatur. Quod, molestias cupiditate!"
                ],
                [
                  "title"   =>  "So What?",
                  "content" =>  "Aariatur laborum fugit! Quis ad repellendus necessitatibus libero quidem. Repellendus blanditiis vitae quaerat placeat commodi ea voluptatem quasi praesentium magnam ipsam inventore illo dicta porro nesciunt doloribus, obcaecati repudiandae veniam voluptate magni, beatae eligendi ullam tempora! A magnam repellendus ea dicta ratione recusandae excepturi optio commodi corporis. Quae possimus laudantium illum aperiam ut nemo exercitationem quam iusto, magnam ad mollitia, temporibus cumque error consequatur rem nostrum alias totam porro? Rerum sed, nobis ratione voluptatibus voluptatem nisi voluptas esse maiores eum totam maxime nostrum dignissimos, voluptates quas, laudantium blanditiis! Odio illo, natus repudiandae commodi enim officia quo eligendi quos delectus eveniet, reiciendis architecto? Illum nemo, deserunt laboriosam fugiat illo quibusdam id, aliquam iusto distinctio placeat ducimus quasi quidem. Labore corrupti similique inventore ex magni facere amet veritatis veniam fugiat dignissimos modi minima totam, nemo alias mollitia ducimus itaque eos error tempore deleniti ea? Eaque, excepturi?"
                ],
                [
                  "title"   =>  "That is serious!",
                  "content" =>  "Aeprehenderit distinctio, soluta ea modi harum totam earum rerum reiciendis fugiat? Inventore aut aliquam qui sequi asperiores sunt optio illo! Cupiditate repellendus facilis soluta eius, distinctio libero ratione, saepe numquam id voluptate natus ipsa explicabo placeat aliquam culpa consequuntur quas quia inventore dolore suscipit. Maxime, quam? At, accusantium suscipit, veritatis provident expedita odio, sunt corrupti dolor illo reprehenderit ducimus cupiditate molestiae! Laudantium odio ea error iste consequuntur, quos dolor, illo voluptatibus quaerat nemo quibusdam repellat sequi corporis, natus porro praesentium dolorem rerum deserunt fugit? Possimus, assumenda voluptas quisquam repellendus rerum quae alias ipsum illo incidunt odio, exercitationem nisi dolorem ut nesciunt inventore natus magni? Voluptatum iusto quis possimus aliquid modi nisi quia cumque. Hic, magni vero reprehenderit obcaecati alias id. Repellendus totam officia, quae dolor eaque voluptatibus officiis impedit, eligendi ducimus corrupti perferendis eum quia molestias porro cupiditate velit illum. Suscipit natus vitae id quidem nostrum eum sapiente."
                ],
                [
                  "title"   =>  "This can happen to me only if I am Thalassemia Minor?",
                  "content" =>  "Aum maxime possimus rem maiores sequi quaerat deleniti distinctio repellat aut consequuntur? Repellat amet reprehenderit dolorem qui, perferendis quisquam, molestias nesciunt esse dolore fuga voluptatum. Dolores quibusdam laborum vel illum aut! Quia assumenda iure sunt ullam maiores perferendis quam quibusdam quae vitae, qui hic incidunt magnam, officia at voluptatum a molestiae eius, quas voluptatem est culpa alias accusantium eveniet? Nisi enim, molestiae distinctio saepe doloremque perferendis voluptates natus aperiam eaque recusandae impedit in a quia culpa illo cum beatae accusantium vitae ad commodi quasi tempora. Odio numquam voluptatum dolorum at et vel consequuntur doloribus ipsam iure perspiciatis quae mollitia illo aut sapiente dolore vitae cum, nostrum, animi quaerat qui? Voluptates ipsam commodi consectetur quas ratione earum velit fuga incidunt aperiam, magnam ipsa repellat nesciunt. Aperiam earum, in consequuntur nobis quae accusantium dolore doloremque. Quos quam voluptatum perspiciatis consectetur quo sequi officia natus ipsa consequatur. Quod, molestias cupiditate!"
                ],
                [
                  "title"   =>  "But I am a normal healthy person. how can I be a Thalassemia Minor?",
                  "content" =>  "Autem quo minus et quod! Veritatis, eveniet unde. Animi nam reprehenderit fugiat illum ad quibusdam ab quidem sed voluptatem. Et sit molestiae quis modi? Sint maiores aut sed quisquam tenetur, rerum est quam deserunt odio ea veniam maxime quis excepturi quasi dolore quas id hic quaerat. Consectetur accusantium porro illum debitis necessitatibus dolor, at aspernatur voluptates corporis earum sit blanditiis, cum ut provident quidem, animi deserunt veniam iste quae. Ut iusto voluptate ipsa iure, id aliquid officiis explicabo ad in? Totam quaerat officiis voluptas excepturi praesentium esse, animi alias ipsa, beatae voluptates inventore provident amet tempora cupiditate nostrum debitis repellat. Tempora repellendus dolorem perferendis rem odit possimus ex ratione mollitia laboriosam molestiae, assumenda quia? Exercitationem reprehenderit nam veritatis tenetur autem fuga est iure iusto vero odit a repudiandae nostrum soluta suscipit, hic magnam ab ipsum explicabo aliquid. Omnis autem eum voluptatibus quos doloribus repudiandae possimus maxime est, ullam at."
                ],
                [
                  "title"   =>  "So What must I do?",
                  "content" =>  "Aeprehenderit distinctio, soluta ea modi harum totam earum rerum reiciendis fugiat? Inventore aut aliquam qui sequi asperiores sunt optio illo! Cupiditate repellendus facilis soluta eius, distinctio libero ratione, saepe numquam id voluptate natus ipsa explicabo placeat aliquam culpa consequuntur quas quia inventore dolore suscipit. Maxime, quam? At, accusantium suscipit, veritatis provident expedita odio, sunt corrupti dolor illo reprehenderit ducimus cupiditate molestiae! Laudantium odio ea error iste consequuntur, quos dolor, illo voluptatibus quaerat nemo quibusdam repellat sequi corporis, natus porro praesentium dolorem rerum deserunt fugit? Possimus, assumenda voluptas quisquam repellendus rerum quae alias ipsum illo incidunt odio, exercitationem nisi dolorem ut nesciunt inventore natus magni? Voluptatum iusto quis possimus aliquid modi nisi quia cumque. Hic, magni vero reprehenderit obcaecati alias id. Repellendus totam officia, quae dolor eaque voluptatibus officiis impedit, eligendi ducimus corrupti perferendis eum quia molestias porro cupiditate velit illum. Suscipit natus vitae id quidem nostrum eum sapiente."
                ],
                [
                  "title"   =>  "And, if I am not a Thalassemia Minor?",
                  "content" =>  "Aum maxime possimus rem maiores sequi quaerat deleniti distinctio repellat aut consequuntur? Repellat amet reprehenderit dolorem qui, perferendis quisquam, molestias nesciunt esse dolore fuga voluptatum. Dolores quibusdam laborum vel illum aut! Quia assumenda iure sunt ullam maiores perferendis quam quibusdam quae vitae, qui hic incidunt magnam, officia at voluptatum a molestiae eius, quas voluptatem est culpa alias accusantium eveniet? Nisi enim, molestiae distinctio saepe doloremque perferendis voluptates natus aperiam eaque recusandae impedit in a quia culpa illo cum beatae accusantium vitae ad commodi quasi tempora. Odio numquam voluptatum dolorum at et vel consequuntur doloribus ipsam iure perspiciatis quae mollitia illo aut sapiente dolore vitae cum, nostrum, animi quaerat qui? Voluptates ipsam commodi consectetur quas ratione earum velit fuga incidunt aperiam, magnam ipsa repellat nesciunt. Aperiam earum, in consequuntur nobis quae accusantium dolore doloremque. Quos quam voluptatum perspiciatis consectetur quo sequi officia natus ipsa consequatur. Quod, molestias cupiditate!"
                ],
                [
                  "title"   =>  "What do I do if I turn out to be  a Thalassemia Minor?",
                  "content" =>  "Aariatur laborum fugit! Quis ad repellendus necessitatibus libero quidem. Repellendus blanditiis vitae quaerat placeat commodi ea voluptatem quasi praesentium magnam ipsam inventore illo dicta porro nesciunt doloribus, obcaecati repudiandae veniam voluptate magni, beatae eligendi ullam tempora! A magnam repellendus ea dicta ratione recusandae excepturi optio commodi corporis. Quae possimus laudantium illum aperiam ut nemo exercitationem quam iusto, magnam ad mollitia, temporibus cumque error consequatur rem nostrum alias totam porro? Rerum sed, nobis ratione voluptatibus voluptatem nisi voluptas esse maiores eum totam maxime nostrum dignissimos, voluptates quas, laudantium blanditiis! Odio illo, natus repudiandae commodi enim officia quo eligendi quos delectus eveniet, reiciendis architecto? Illum nemo, deserunt laboriosam fugiat illo quibusdam id, aliquam iusto distinctio placeat ducimus quasi quidem. Labore corrupti similique inventore ex magni facere amet veritatis veniam fugiat dignissimos modi minima totam, nemo alias mollitia ducimus itaque eos error tempore deleniti ea? Eaque, excepturi?"
                ]
              ];
              $innerHTML = '';
              foreach($accordionData as $key => $data) {
                $innerHTML .= '
                  
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="custom_accordion_heading_' . $key . '">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#custom_accordion_collapse_' . $key . '" aria-expanded="false" aria-controls="custom_accordion_collapse_' . $key . '">
                        ' . $data["title"] . '
                      </button>
                    </h2>
                    <div id="custom_accordion_collapse_' . $key . '" class="accordion-collapse collapse" aria-labelledby="custom_accordion_heading_' . $key . '" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        ' . $data["content"] . '
                      </div>
                    </div>
                  </div>

                ';
              }
              echo $innerHTML;
              ?>
            </div>
          </div>
        </section>

      </div>
    </section>

  </main>

  <?php require_once "footer.php" ?>
  </script>
</body>

</html>