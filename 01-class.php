<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Class</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black/80">
    <main class="bg-black/40 h-[640px] w-[380px] rounded-md">
        <header class="flex 
                       justify-center 
                       items-center 
                       py-5 
                       gap-5
                       bg-black/60
                       rounded-t-md">
            <a href="index.html">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-yellow-200 hover:-translate-x-2 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1 class="text-2xl text-white/80">01 - Class</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
            <?php
                class Vehicle {
                    // Attributes
                    public $brand;
                    public $refer;
                    public $model;
                    public $color;

                    //Methods
                    public function setAttributes($brand, $refer , $model, $color) {
                        $this->brand = $brand;
                        $this->refer = $refer;
                        $this->model = $model;
                        $this->color = $color;
                    }
                    public function getAttributes() {
                        return "<div class='p-4 mb-4 flex-col ring-1 ring-white/50 bg-white/70 rounded-md'>
                        <p><strong>Brand:</strong>     $this->brand</p>
                        <p><strong>Reference:</strong> $this->refer</p>
                        <p><strong>Model:</strong>     $this->model</p>
                        <p><strong>Color:</strong>     $this->color</p>
                        </div>";
                    }

                }
                $vehicle1 = new Vehicle;
                $vehicle1->setAttributes('Volkswagen','Tiguan',2023,'Black');
                echo $vehicle1->getAttributes();

                $vehicle2 = new Vehicle;
                $vehicle2->setAttributes('Audi','R8',2023,'White');
                echo $vehicle2->getAttributes();

                $vehicle3 = new Vehicle;
                $vehicle3->setAttributes('Toyota','Prado',2023,'Red');
                echo $vehicle3->getAttributes();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>