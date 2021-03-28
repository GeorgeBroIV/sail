@if(!$curl)
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Laravel</title>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		
		<!-- Styles -->
		<style>
			/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
		</style>
		
		<style>
			body {
				font-family: 'Nunito', sans-serif;
			}
		</style>
	</head>
	<body class="antialiased">
		<div>
			<p>
				# Ensure that Docker is running...
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;docker info > /dev/null 2>&1
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;if [ $? -ne 0 ]; then
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Please start Docker and try again."
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit 1
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;fi
			</p>
			<p>
				# Create new Laravel project
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;laravel new {{$project}}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;cd {{$project}}
			</p>
			<p>
				# Remove Laravel's Sail
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;sed -i '' '/sail/d' ./composer.json
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;rm -r vendor/bin/sail
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;rm -r vendor/laravel/sail
			</p>
			<p>
				# Add modified Sail to composer.json
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;composer require --dev stoneplayground/sail
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;composer update
			</p>
			<p>
				#Update variables
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;sed -i '' 's/myproject/{{$project}}/g' ./vendor/stoneplayground/sail/stubs/docker-compose.stub
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;sed -i '' 's/myproject/{{$project}}/g' ./vendor/stoneplayground/sail/bin/sail
			</p>
			<p>
				# Install Sail
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;php ./artisan sail:install --with=mysql,redis,meilisearch,mailhog,selenium
			</p>
			<p>
				# Update variables
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;find . -type f -name '.env' -exec sed -i '' -e 's/APP_NAME=Laravel/APP_NAME={{$project}}/g' {} +
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;find . -type f -name '.env' -exec sed -i '' -e 's/{{$project}}.test/{{$project}}.local/g' {} +
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;find . -type f -name '.env' -exec sed -i '' -e '/^APP_URL=.*/a \
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;\
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;# Sail/Docker\
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;APP_SERVICE={{$project}}.local' {} +
			</p>
			<p>
				# Build the docker container
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;./vendor/bin/sail build --no-cache
			</p>
			<p>
				# Set Terminal Text Colors
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;CYAN='\033[0;36m'
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;LIGHT_CYAN='\033[1;36m'
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;WHITE='\033[1;37m'
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;NC='\033[0m'
			</p>
			<p>
				echo ""
			</p>
			<p>
				# Set write permissions in vendor subfolder
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;cd ./vendor/stoneplayground/sail/.git/objects
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;chmod -R +w pack
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;cd ../../../../../
			</p>
			<p>
				# Display next steps
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;if sudo -n true 2>/dev/null; then
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sudo chown -R $USER: .
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}Thank you! We hope you build something incredible."
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo ""
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}Don't forget to add the following to your hosts file"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${NC}   127.0.0.1 {{$project}}.local"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo ""
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}Get started with:${NC} cd {{$project}} && ./vendor/bin/sail up"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo ""
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}To publish vendor files, type 'php ./artisan vendor:publish'"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;else
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}Please provide your password so we can make some final adjustments to your application's permissions.${NC}"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo ""
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sudo chown -R $USER: .
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}Thank you! We hope you build something incredible."
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo ""
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}Don't forget to add the following to your hosts file"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${NC}   127.0.0.1 {{$project}}.local"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo ""
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}Dive in with:${NC} cd {{$project}} && ./vendor/bin/sail up"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo ""
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo -e "${WHITE}To publish vendor files, type 'php ./artisan vendor:publish'"
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;fi
			</p>
		</div>
	</body>
</html>
@else
# Ensure that Docker is running...
docker info > /dev/null 2>&1
if [ $? -ne 0 ]; then
echo "Please start Docker and try again."
exit 1
fi
# Create new Laravel project
laravel new {{$project}}
cd {{$project}}
# Remove Laravel's Sail
sed -i '' '/sail/d' ./composer.json
rm -r vendor/bin/sail
rm -r vendor/laravel/sail
# Add modified Sail to composer.json
composer require --dev stoneplayground/sail
composer update
#Update variables
sed -i '' 's/myproject/{{$project}}/g' ./vendor/stoneplayground/sail/stubs/docker-compose.stub
sed -i '' 's/myproject/{{$project}}/g' ./vendor/stoneplayground/sail/bin/sail
# Install Sail
php ./artisan sail:install --with=mysql,redis,meilisearch,mailhog,selenium
# Update variables
find . -type f -name '.env' -exec sed -i '' -e 's/APP_NAME=Laravel/APP_NAME={{$project}}/g' {} +
find . -type f -name '.env' -exec sed -i '' -e 's/{{$project}}.test/{{$project}}.local/g' {} +
find . -type f -name '.env' -exec sed -i '' -e '/^APP_URL=.*/a \
\
# Sail/Docker\
APP_SERVICE={{$project}}.local' {} +
# Build the docker container
./vendor/bin/sail build --no-cache
# Set Terminal Text Colors
CYAN='\033[0;36m'
LIGHT_CYAN='\033[1;36m'
WHITE='\033[1;37m'
NC='\033[0m'
echo ""
# Set write permissions in vendor subfolder
cd ./vendor/stoneplayground/sail/.git/objects
chmod -R +w pack
cd ../../../../../
# Display next steps
if sudo -n true 2>/dev/null; then
sudo chown -R $USER: .
echo -e "${WHITE}Thank you! We hope you build something incredible."
echo ""
echo -e "${WHITE}Don't forget to add the following to your hosts file"
echo -e "${NC}   127.0.0.1 {{$project}}.local"
echo ""
echo -e "${WHITE}Get started with:${NC} cd {{$project}} && ./vendor/bin/sail up"
echo ""
echo -e "${WHITE}To publish vendor files, type 'php ./artisan vendor:publish'"
else
echo -e "${WHITE}Please provide your password so we can make some final adjustments to your application's permissions.${NC}"
echo ""
sudo chown -R $USER: .
echo -e "${WHITE}Thank you! We hope you build something incredible."
echo ""
echo -e "${WHITE}Don't forget to add the following to your hosts file"
echo -e "${NC}   127.0.0.1 {{$project}}.local"
echo ""
echo -e "${WHITE}Dive in with:${NC} cd {{$project}} && ./vendor/bin/sail up"
echo ""
echo -e "${WHITE}To publish vendor files, type 'php ./artisan vendor:publish'"
fi
@endif
