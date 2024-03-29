<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Nunito+Sans:opsz,wght@6..12,400;6..12,600;6..12,700;6..12,800&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"
    />
    <title>NRNA</title>
    <style>
      #footer,
      #nav {
        background-color: #3730a3;
        font-family: "Nunito Sans", sans-serif;
      }

      #buttons {
        background-color: #a755f7;
        border: none;
      }
      #logo-background {
        background-color: #3730a3;
        justify-content: center;
      }
      #hero {
        background-color: #f4f4f4;
      }
    </style>
  </head>
  <body>
    <section id="nav">
      <div
        class="flex lg:flex w-full lg:flex-wrap lg:justify-center lg:items-center md:justify-center sm:justify-center py-2"
      >
        <div class="flex gap-2 h-14 px-4 py-2" id="logo-background">
          <img src="{{ asset('images/logo-2.png') }}" alt="" />
          <div
            class="text-white text-center lg:text-2xl font-bold lg:w-full sm:text-xs w-8/12"
          >
            Non Resident Nepali Association (NRNA)
          </div>
        </div>
        <button
          data-collapse-toggle="navbar-default"
          type="button"
          class="inline-flex items-center mr-4 mt-3 p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-default"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 17 14"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15"
            />
          </svg>
        </button>
      </div>
    </section>
    <section class="menu">
      <ul
        class="hidden lg:flex flex-wrap font-semibold justify-center my-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900"
        id="navbar-default"
      >
        <li class="mr-6 mt-4">
          <a href="#" class="flex items-center justify-center gap-1"
            >Services
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="2.0"
              stroke="currentColor"
              class="w-4 h-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4.5 15.75l7.5-7.5 7.5 7.5"
              />
            </svg>
          </a>
        </li>
        <li class="mr-6 mt-4">
          <a href="#" class="flex justify-center">Projects</a>
        </li>
        <li class="mr-6 mt-4">
          <a href="#" class="flex justify-center">Knowledge</a>
        </li>
        <li class="mr-6 mt-4">
          <a class="flex items-center justify-center gap-1" href="#"
            >About Us
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="2.0"
              stroke="currentColor"
              class="w-4 h-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M19.5 8.25l-7.5 7.5-7.5-7.5"
              />
            </svg>
          </a>
        </li>
        <li class="mr-6 mt-4 mb-4">
          <a href="#" class="flex justify-center">Careers</a>
        </li>
      </ul>
    </section>

    <div class="min-h-auto w-full">
      <div class="w-full border-b border-gray-200 h-64 bg-white p-6 sm:px-20">
        <div class="mt-8 text-2xl">
          Welcome to Non Residnet Nepali Association(NRNA)
        </div>

        <div class="mt-6 text-gray-500">More info</div>
      </div>

      <div
        class="grid w-full grid-cols-1 bg-gray-200 bg-opacity-25 shadow-md md:grid-cols-3"
      >
        <div class="border border-gray-300 bg-slate-50 p-6">
          <div class="flex items-center flex-col gap-5 mt-12">
            <a
            href="{{ route('business.create') }}"
              class="bg-blue-500 hover:bg-blue-700 text-white text-center font-semibold py-2 px-4 border border-blue-700 rounded w-full"
              id="buttons"
            >
              Create New Business
    </a>
            <a
            href="{{ route('business.index') }}"
              class="bg-blue-500 hover:bg-blue-700 text-white text-center font-semibold py-2 px-4 border border-blue-700 rounded w-full"
              id="buttons"
            >
              View All Business
    </a>
          </div>
        </div>

        <div
          class="border border-gray-300 bg-slate-50 h-64 p-6 md:border-t-0 md:border-l overflow-hidden"
        >
          <img src="{{ asset('images/discounts_final.jpg') }}" alt="" class="h-52 object-contain w-full"/>
        </div>
        <div
          class="border border-gray-300 bg-slate-50 p-6 h-64 md:border-t-0 md:border-l overflow-hidden"
        >
        <img src="{{ asset('images/img1.jpg') }}" alt=""  class="h-52 object-contain w-full">
        </div>
      </div>
    </div>

    <section class="h-auto p-10" id="hero">
      <div class="flex flex-wrap w-11/12 m-auto justify-between">
        <div
          class="bg-zinc-50 px-4 py-5 rounded-xl w-96 flex flex-col gap-4 shadow-md mb-5"
        >
          <div class="flex justify-between font-semibold items-center">
            <div id="text" class="font-semibold text-xl mb-4">
              Discover<br />
              your idea
            </div>
            <div id="arrow">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="3.0"
                stroke="#03adeb"
                class="w-9 h-8"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                />
              </svg>
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">Intrapreneurship</div>
            <div class="font-normal font-sm">
              Empower corporate employees to discover new ideas in a lean way.
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">Startup Collaboration</div>
            <div class="font-normal font-sm">
              Partner with leading startups to develop new revenue streams.
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">Opportunity Exploration</div>
            <div class="font-normal font-sm">
              Explore the current industry trends to get a 360 degree overview
              of the idea landscape.
            </div>
          </div>
        </div>
        <div
          class="bg-zinc-50 px-4 py-5 rounded-xl w-96 flex flex-col gap-4 shadow-md mb-5"
        >
          <div class="flex justify-between font-semibold items-center">
            <div id="text" class="text-xl font-semibold mb-4">
              Launch<br />
              your venture
            </div>
            <div id="arrow">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="3.0"
                stroke="#fbc70f"
                class="w-9 h-8"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                />
              </svg>
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">Venture dilligence</div>
            <div class="font-normal font-sm">
              Prove you found a problem worth solving through talking with real
              customers early on.
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">MVP Launch</div>
            <div class="font-normal font-sm">
              Build a minimum viable product that delivers your value
              proposition.
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">Found your venture</div>
            <div class="font-normal font-sm">
              Spin out or spin in, find funding and find the most effective
              solution for complex legal setups.
            </div>
          </div>
        </div>
        <div
          class="bg-zinc-50 px-4 py-5 rounded-xl w-96 flex flex-col gap-4 shadow-md mb-5"
        >
          <div class="flex justify-between font-semibold items-center">
            <div id="text" class="font-semibold text-xl mb-4">
              Grow<br />
              your business
            </div>
            <div id="arrow">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="3.0"
                stroke="#002148"
                class="w-9 h-8"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                />
              </svg>
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">Growth marketing and sales</div>
            <div class="font-normal font-sm">
              optimize steps of the funnel and eliminate bottlenecks and enable
              fast paced growth.
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">Team growth</div>
            <div class="font-normal font-sm">
              Fidn the right talent that brings the Knowledge and experience to
              support your ventures growth.
            </div>
          </div>
          <div class="flex flex-col gap-1">
            <div class="font-semibold">Founding team setup</div>
            <div class="font-normal font-sm">
              We become your Co-Founders, sparring partners and coach,
              supporting you in strategic decisions.
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      id="footer"
      class="text-white text-sm py-10 text-center font-semibold"
    >
      Copyright &copy; 2021 NRNA . All Rights Reserved by NRNA
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
