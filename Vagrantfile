Vagrant.require_version '>= 1.7.0'

Vagrant.configure(2) do |config|
	config.vm.define 'devsrv' do |devsrv|
		devsrv.vm.box = 'ubuntu/focal64'

		#==network
		#-# virtualbox security change limits IP available
		devsrv.vm.network 'private_network', ip: '192.168.56.200'
		#--connect to internet
		#-@ https://stackoverflow.com/a/18457420/1139122
		devsrv.vm.provider 'virtualbox' do |vb|
			vb.customize ['modifyvm', :id, '--natdnshostresolver1', 'on']
			vb.customize ['modifyvm', :id, '--natdnsproxy1', 'on']
		end

		#==provision
		#-@ [official](http://docs.ansible.com/ansible/guide_vagrant.html)
		devsrv.vm.provision 'ansible' do |ansible|
			ansible.verbose = 'v'
			ansible.playbook = 'config/provision.yml'
		end

		#==sync local folders
		#--sync sites folders
		devsrv.vm.synced_folder './sites', '/var/www/sites'
		#--disable syncing project folder
		devsrv.vm.synced_folder '.', '/vagrant', disabled: true
	end
end
