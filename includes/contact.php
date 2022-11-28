  <section class="my-32">
      <div class="pb-16 px-8 xl:px-48">
          <!-- <h5 class="uppercase text-secondary text-sm pb-4"></h5> -->
          <h2 class="capitalize font-bold text-4xl text-white">get in touch</h2>
          <h4 class="text-secondary pt-4 w-full lg:w-4/12">I' am open for new projects, if you want to hire me
              feel free to send me a message.</h4>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 px-8 xl:px-48">
          <div class="grid">
              <div>
                  <h5 class="text-white font-bold uppercase tracking-widest">address</h5>
                  <p class="text-secondary mb-8 address">Cavite, Philippines</p>
                  <h5 class="text-white font-bold uppercase tracking-widest">email</h5>
                  <p class="text-secondary mb-8 underline email"><a href="mailto:edmarktuazon03@gmail.com"
                          class="ease-out duration-300 hover:text-white">edmarktuazon03@gmail.com</a></p>
                  <h5 class="text-white font-bold uppercase tracking-widest">phone</h5>
                  <p class="text-secondary phone1">(+63) 970 768 8781</p>
                  <p class="text-secondary mb-8 lg:mb-0 phone2">(+63) 967 510 9949</p>
              </div>
          </div>
          <div class="grid">
              <?php
                    if (isset($_POST['send'])) {
                        //access user entered data
                        $email = $_POST['email'];
                        $name = $_POST['name'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        if (empty($name) || empty($subject) || empty($message) || empty($email)) {
                    ?>
              <p class="bg-highLight mb-6 flex text-white p-4">
                  <?php echo "All fields must be filled out" ?>
              </p>
              <?php
                        } else {
                            if (mail($email, $subject, $message, "Hello my name is $name")) { ?>
              <p class="bg-green-400 mb-6 flex text-white p-4">
                  <?php echo "Thanks for your interest, your mail was successfully sent." ?>
                  <a href="../index.php"
                      class="text-white underline ml-1 ease-out duration-100 hover:text-backupPrimary">Back to
                      Home</a>
              </p>
              <?php
                            } else {
                            ?>
              <p class="bg-highLight mb-6 text-white p-4">
                  <?php echo "There was a problem while sending your mail, please contact developer via email instead. Thanks!" ?>
              </p>
              <?php
                            }
                        }
                    }
                    ?>
              <form action="../contact/" method="POST">
                  <div class="form-group">
                      <input type="email" name="email"
                          class="w-full p-4 text-white bg-transparent border-backupSecondary border mb-4 focus:outline-none focus:border-white form-email"
                          placeholder="Email Address" />
                  </div>
                  <div class="form-group">
                      <input type="name" name="name"
                          class="w-full p-4 text-white bg-transparent border-backupSecondary  border mb-4 focus:outline-none focus:border-white form-name"
                          placeholder="Name" />
                  </div>
                  <div class="form-group">
                      <input type="text" name="subject"
                          class="w-full p-4 text-white bg-transparent  border mb-4 border-backupSecondary focus:outline-none focus:border-white form-subject"
                          placeholder="Subject" />
                  </div>
                  <div class="form-group">
                      <textarea cols="30" rows="4"
                          class="w-full p-4 bg-transparent text-white border-backupSecondary border mb-4  focus:outline-none focus:border-white form-textarea"
                          type="text" name="message" placeholder="Write your Message here.."></textarea>
                  </div>
                  <div class="form-group">
                      <button
                          class="bg-white hover:bg-highLight hover:text-white ease-out duration-300 focus:bg-highLight focus:text-white capitalize  cursor-pointer w-40 p-3 text-center text-sm  rounded-sm font-bold tracking-widest flex items-center justify-center mr-4"
                          id="form-btn" type="submit" name="send">send message</button>
                  </div>
              </form>
          </div>
      </div>
  </section>