@extends('layouts.app')

@section('content')
<div id="foundationPage">
	<section class="banner">
		<div class="container">
	        <div class="row">
	        	<div class="col-md-4">
	        		<div class="intro">
	        			<h5>CMC Foundation</h5>
	        			<div>The CMC Foundation is a not-for-profit organization based in Zurich, Switzerland, and operates research centers in Palo Alto, San Francisco, and Zurich.</div>
	        		</div>
	        	</div>
	        </div>
        </div>
    </section>
    <section>
    	<div class="container">
	    	<h2 class="sectionHeading">Our Mission</h2>
	    	<div class="row">
	    		<div class="col-md-6">
	    			<p>We believe that "smart contracts" that run on a public blockchain are a vastly superior new form of software. However, traditional blockchains provide hosting frameworks for smart contracts that are highly limiting. We believe that once these limitations are removed by a next generation blockchain, a "blockchain singularity" will occur, in which the majority of the world's systems and services will be rebuilt entirely from smart contracts. In the process, these systems and services will be fundamentally reimagined, changing how our information systems, financial systems, economy and society works, by leveraging the many new capabilities that smart contracts provide.</p>
	    			<p>Our mission is to develop technology that supports the next generation Internet Computer blockchain network and ecosystem. Among many firsts, the Internet Computer is the first public blockchain that can scale the capacity it provides to smart contracts without bound, allowing it to process and maintain any amount of</p>
	    		</div>
	    		<div class="col-md-6">
	    			<p>data required. It can run smart contracts with efficiency approaching that of traditional software, while keeping costs low and predictable. It hosts smart contracts that run at web speed, and which can serve interactive web content directly to end users without intermediaries, providing for the creation of systems and services that run entirely from a blockchain. The blockchain also runs under the control of an algorithmic governance system and is self-directed.</p>
	    			<p>The Internet Computer is supported by a growing community of crypto enthusiasts, investors, and independent node providers, who operate the node machines that power the Internet Computer. Our team of world-class researchers and engineers propose, design, and develop extensions and improvements to the Internet Computer blockchain based on breakthrough inventions in crypto, distributed computing and decentralized governance.</p>
	    		</div>
	    	</div>
    	</div>
    </section>
    <section class="ourTeam">
    	<div class="container">
    		<div class="row mb-3 align-items-center">
    			<div class="col">
    				<h2 class="sectionHeading mb-0">Our Team</h2>
    			</div>
    			<div class="col-auto ms-auto filter">
    				<a href="#" class="active">All</a>
    				<a href="#">Leadership</a>
    				<a href="#">R&D</a>
    				<a href="#">Operations</a>
    			</div>
    		</div>
    		<div class="row stats">
    			<div class="col-md-4">
    				<div class="item">
    					<div>Founded</div>
    					<h3 class="mb-0">Oct 2021</h3>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="item">
    					<div>Research Centers</div>
    					<h3 class="mb-0">5</h3>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="item">
    					<div>Team Members</div>
    					<h3 class="mb-0">2000+</h3>
    				</div>
    			</div>
    		</div>
    		<div class="members row">
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    			<div class="col-auto item">
    				<img src="{{ asset('img/team-avata-1.jpg') }}">
    			</div>
    		</div>
    	</div>
    </section>
    <section class="community">
    	<div class="container">
    		<div class="row align-items-center">
				<div class="col-md-4">
					<img src="{{ asset('img/img-20.jpg') }}">
				</div>
				<div class="col-md-4">
					<div class="shadow p-3">
						<h3 class="sectionHeading text-center">Our Community</h3>
						<p>The CMC Foundation is dedicated to bringing people and organizations together to learn about and collaborate on the next-generation of decentralized applications. The Internet Computer allows developers to build dapps that are scaleable, run smart contracts at web speed, and serve user experiences directly on chain. We believe in a future in which every system and service is rebuilt and reimagined using smart contracts and runs entirely from public blockchains without need for traditional IT. We’re committed to connecting those who believe the same through our events, content, and discussions.</p>
						<div class="text-center">
	    					<a href="#" class="btn btnRed sm">GET INVOLVED</a>
	    				</div>
	    				<div class="social row justify-content-center">
	    					<div class="col-5">
	    						<ul class="list-unstyled">
	    							<li><a href="#"><i class="fab fa-github icon"></i> Github</a></li>
	    							<li><a href="#"><i class="fab fa-twitter icon"></i> Twitter</a></li>
	    							<li><a href="#"><i class="fab fa-linkedin icon"></i> LinkedIn</a></li>
	    							<li><a href="#"><i class="fab fa-medium icon"></i> Medium</a></li>	
	    						</ul>
	    					</div>
	    					<div class="col-5">
	    						<ul class="list-unstyled">
	    							<li><a href="#"><i class="fab fa-youtube icon"></i> Youtube</a></li>
	    							<li><a href="#"><i class="fab fa-telegram icon"></i> Telegram</a></li>
	    							<li><a href="#"><i class="fab fa-reddit icon"></i> Reddit</a></li>
	    							<li><a href="#"><i class="fab fa-facebook icon"></i> Facebook</a></li>
	    						</ul>
	    					</div>
	    				</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="{{ asset('img/img-21.jpg') }}">
				</div>
			</div>
    	</div>
    </section>
    <section class="events">
    	<div class="container">
    		<h2 class="sectionHeading">Past Events</h2>
    		<div class="row">
    			<div class="col-md-3">
    				<ul class="list-unstyled year">
    					<li><a href="#" class="active">2021</a></li>
    					<li><a href="#">2020</a></li>
    				</ul>
    			</div>
    			<div class="col-md-9">
    				<ul class="list-unstyled listEvents">
    					<li>
    						<a href="#">
    							<h6>Internet Computer Mercury Genesis Launch</h6>
								<div>May 07 | Global - Free</div>
    						</a>
    					</li>
    					<li>
    						<a href="#">
    							<h6>Exploring Entrepreneurship in the Open Internet Boom || In Partnership with TechCrunch</h6>
								<div>May 07 | Global - Free</div>
    						</a>
    					</li>
    					<li>
    						<a href="#">
    							<h6>Forbes || Trillion-Dollar Opportunity: How A New Internet Will Completely Reimagine Your Business Model</h6>
								<div>May 07 | Global - Free</div>
    						</a>
    					</li>
    					<li>
    						<a href="#">
    							<h6>MIT || Future Compute 2021: How the Internet of Things, the speed of 5G, and the reasoning of Artificial Intelligence are.</h6>
								<div>May 07 | Global - Free</div>
    						</a>
    					</li>
    					<li>
    						<a href="#">
    							<h6>Exploring Entrepreneurship in the Open Internet Boom || In Partnership with TechCrunch</h6>
								<div>May 07 | Global - Free</div>
    						</a>
    					</li>
    					<li>
    						<a href="#">
    							<h6>Forbes || Trillion-Dollar Opportunity: How A New Internet Will Completely Reimagine Your Business Model</h6>
								<div>May 07 | Global - Free</div>
    						</a>
    					</li>
    				</ul>
    			</div>
    		</div>
    	</div>				
    </section>
</div>
		
@endsection
