Rails.application.routes.draw do
  devise_for :users
  resources :forums do
    resources :comments
  end
  root 'forums#index'
  devise_scope :user do
    get '/users/sign_out' => 'devise/sessions#destroy'
  end
end
