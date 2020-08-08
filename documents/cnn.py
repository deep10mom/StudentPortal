import numpy
import keras
from keras.datasets import cifar10
from keras.models import Sequential
from keras.layers import Dense
from keras.layers import Dropout
from keras.layers import Flatten
import os
import cv2
from keras.constraints import maxnorm
from keras.optimizers import *
from keras.layers.convolutional import Conv2D
from keras.layers.convolutional import MaxPooling2D
from keras.utils import np_utils
from keras import backend as K
K.set_image_dim_ordering('th')


#(X_train, y_train), (X_test, y_test) = cifar10.load_data()
#print(X_train)


X_train=[];
y_train=[];

for filename in os.listdir('C:\\Users\\Win 8.1\\Desktop\\New folder\\sp\\classical'):
  if filename == 'Thumbs.db':
      break;
  img=cv2.imread('C:\\Users\\Win 8.1\\Desktop\\New folder\\sp\\classical\\'+filename);
  
  #print(filename)
  X_train.append(img)
  y_train.append(0);

#cv2.imshow('image',img)
#cv2.waitkey(0)
#cv2.destroyAllWindows()
c_train=numpy.array(X_train)
print(c_train.shape)

for filename in os.listdir('C:\\Users\\Win 8.1\\Desktop\\New folder\\sp\\metal'):
  img=cv2.imread('C:\\Users\\Win 8.1\\Desktop\\New folder\\sp\\metal\\'+filename);
  if filename == 'Thumbs.db':
      break;
  X_train.append(img)
  y_train.append(1);

c_train=numpy.array(X_train)
print(c_train.shape)


for filename in os.listdir('C:\\Users\\Win 8.1\\Desktop\\New folder\\sp\\reggae'):
  img=cv2.imread('C:\\Users\\Win 8.1\\Desktop\\New folder\\sp\\reggae\\'+filename);
  if filename == 'Thumbs.db':
      break;
  X_train.append(img)
  y_train.append(2);

c_train=numpy.array(X_train)
print(c_train.shape)

X_train=[X_train]
'''
X_test=[];
y_test=[];
for filename in os.listdir('C:\\Users\\Win 8.1\\Desktop\\New folder\\dataset\\drum_test'):
  if filename == 'Thumbs.db':
      break;
  img=cv2.imread('C:\\Users\\Win 8.1\\Desktop\\New folder\\dataset\\drum_test\\'+filename);
  X_test.append(img)
  y_test.append(0);
for filename in os.listdir('C:\\Users\\Win 8.1\\Desktop\\New folder\\dataset\\flute_test'):
  if filename == 'Thumbs.db':
      break;
  img=cv2.imread('C:\\Users\\Win 8.1\\Desktop\\New folder\\dataset\\flute_test\\'+filename);
  X_test.append(img)
  y_test.append(1);


X_train=[X_train]
X_test=[X_test]
#print(X_train)
'''
'''
X_train = X_train.astype('float32')
X_test = X_test.astype('float32')
X_train = X_train / 255.0
X_test = X_test / 255.0
'''


y_train = np_utils.to_categorical(y_train)
#y_test = np_utils.to_categorical(y_test)
#num_classes = y_test.shape[1]
num_classes = y_train.shape[1]

model = Sequential()
model.add(Conv2D(32, (3, 3), input_shape=(575, 306,3), padding='same', activation='relu', kernel_constraint=maxnorm(3)))
model.add(Dropout(0.2))
model.add(Conv2D(32, (3, 3), activation='relu', padding='same', kernel_constraint=maxnorm(3)))
model.add(MaxPooling2D(pool_size=(2, 2)))
model.add(Flatten())
model.add(Dense(512, activation='relu', kernel_constraint=maxnorm(3)))
model.add(Dropout(0.2))
model.add(Dense(num_classes, activation='softmax'))
# Compile model
epochs = 25
lrate = 0.00001
decay = lrate/epochs
#sgd = SGD(lr=lrate, momentum=0.9, decay=decay, nesterov=False)
adam=keras.optimizers.Adam(lr=lrate,beta_1=0.9,beta_2=0.999,epsilon=None,decay=0,amsgrad=False)
model.compile(loss='categorical_crossentropy', optimizer=adam, metrics=['accuracy'])
print(model.summary())

#model.fit(X_train, y_train, validation_data=(X_train, y_train), epochs=epochs, batch_size=32)
model.fit(X_train, y_train, epochs=epochs, batch_size=300)
# Final evaluation of the model
#scores = model.evaluate(X_test, y_test, verbose=0)
scores = model.evaluate(X_train, y_train, verbose=0)
print("Accuracy: %.2f%%" % (scores[1]*100))


